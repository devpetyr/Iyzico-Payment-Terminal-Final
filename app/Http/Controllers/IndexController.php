<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $conversationId;
    public $token;
    public function __construct()
    {
        $this->conversationId = random_int(100000, 999999);
    }

    public function index()
    {
        return view('index');
    }
    public function pay()
    {
        $request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
        $request->setLocale(\Iyzipay\Model\Locale::EN);
        $request->setConversationId($this->conversationId);
        $request->setPrice("1");
        $request->setPaidPrice("10");
        $request->setCurrency(\Iyzipay\Model\Currency::USD);
        $request->setBasketId("B67832");
        $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
        $request->setCallbackUrl('http://127.0.0.1:8000/get-data');
        $request->setEnabledInstallments(array(2, 3, 6, 9));

        $buyer = new \Iyzipay\Model\Buyer();
        $buyer->setId("BY789");
        $buyer->setName("Dev");
        $buyer->setSurname("Devpetyr");
        $buyer->setGsmNumber("+923408736583");
        $buyer->setEmail("devpetyr911@gmail.com");
        $buyer->setIdentityNumber("74300864791");
        $buyer->setLastLoginDate("2015-10-05 12:43:35");
        $buyer->setRegistrationDate("2013-04-21 15:12:09");
        $buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $buyer->setIp("85.34.78.112");
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");

        $request->setBuyer($buyer);
        $shippingAddress = new \Iyzipay\Model\Address();
        $shippingAddress->setContactName("Jane Doe");
        $shippingAddress->setCity("Istanbul");
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $shippingAddress->setZipCode("34742");
        $request->setShippingAddress($shippingAddress);

        $billingAddress = new \Iyzipay\Model\Address();
        $billingAddress->setContactName("Jane Doe");
        $billingAddress->setCity("Istanbul");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $billingAddress->setZipCode("34742");
        $request->setBillingAddress($billingAddress);

        $basketItems = array();
        $firstBasketItem = new \Iyzipay\Model\BasketItem();
        $firstBasketItem->setId("BI101");
        $firstBasketItem->setName("asd");
        $firstBasketItem->setCategory1("asd");
        $firstBasketItem->setCategory2("asd");
        $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $firstBasketItem->setPrice("0.3");
        $basketItems[0] = $firstBasketItem;

        $secondBasketItem = new \Iyzipay\Model\BasketItem();
        $secondBasketItem->setId("BI102");
        $secondBasketItem->setName("Game code");
        $secondBasketItem->setCategory1("Game");
        $secondBasketItem->setCategory2("Online Game Items");
        $secondBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
        $secondBasketItem->setPrice("0.5");

        $basketItems[1] = $secondBasketItem;
        $thirdBasketItem = new \Iyzipay\Model\BasketItem();
        $thirdBasketItem->setId("BI103");
        $thirdBasketItem->setName("Usb");
        $thirdBasketItem->setCategory1("Electronics");
        $thirdBasketItem->setCategory2("Usb / Cable");
        $thirdBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $thirdBasketItem->setPrice("0.2");

        $basketItems[2] = $thirdBasketItem;

        $request->setBasketItems($basketItems);
        $checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, $this->config());

        $token = $checkoutFormInitialize->getToken();
        session()->put('token',$token);
        return redirect( $checkoutFormInitialize->getPaymentPageUrl());


    }


    public function getdata()
    {
        $request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($this->conversationId);
        $request->setToken(session()->get('token'));
        $checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, $this->config());
        dd($checkoutForm->getStatus(),$checkoutForm->getPaymentId(),$checkoutForm->getPaymentStatus(), $checkoutForm->getPaidPrice(), $checkoutForm->getConversationId());
//        return $checkoutForm;
    }
    public function config()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-VOSUo8urn6HbwykBxUk4mrg1BwQq3Gsa');
        $options->setSecretKey('sandbox-xnpaWdHrgDOOjmDjGpB5zb4xGXSNBFPG');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}
