<div class="row">
    <style>
        .iyzico-button {
            isplay: block !important;
            position: relative !important;
            width: 100% !important;
            height: 48px !important;
            padding: 14.5px 21px !important;
            text-align: center !important;
            background: #ff4600 !important;
            border: none !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            line-height: 1.3 !important;
            color: #fff !important;
            fill: #fff !important;
            outline: none !important;
            border-radius: 8px !important;
            transition: all 0.3s linear !important;
            cursor: pointer !important;
        }

    </style>
{{--    <div id="iyzico-button"></div>--}}

    <div id="iyzico-button1">
        <div class="iyzico-button-container">
             <form action="{{route('pay')}}" name="iyzico-form" method="POST" class="iyzico-form">@csrf
                 <button type="submit" class="iyzico-button"  id="iyzico-button">PAY</button>
                 <label class="iyzico-tagline"><svg width="120" height="19"><g fill="none" fill-rule="evenodd">  <g fill-rule="nonzero">    <path fill="#FF5F00" d="M56.993 2.48h7.877v13.014h-7.877z"></path>    <path d="M57.805 8.989a8.297 8.297 0 013.125-6.506 8.115 8.115 0 00-11.067.892c-2.895 3.17-2.895 8.059 0 11.23a8.115 8.115 0 0011.067.892 8.297 8.297 0 01-3.125-6.508z" fill="#EB001B"></path>    <path d="M73.46 14.807v-.838h.166v-.174h-.396v.174h.156v.838h.074zm.77 0v-1.012h-.12l-.14.723-.14-.723h-.12v1.012h.086v-.766l.13.658h.09l.13-.658v.766h.084zM74.168 8.989c0 3.168-1.789 6.059-4.606 7.443a8.106 8.106 0 01-8.632-.938 8.31 8.31 0 003.126-6.507A8.31 8.31 0 0060.93 2.48a8.106 8.106 0 018.632-.937c2.817 1.384 4.606 4.275 4.606 7.443v.003z" fill="#F79E1B"></path>  </g>  <g fill-rule="nonzero">    <path fill="#00579F" d="M17.317 15.799H14.08l2.024-12.571h3.237zM29.052 3.535A7.95 7.95 0 0026.148 3c-3.196 0-5.448 1.712-5.461 4.159-.027 1.805 1.611 2.808 2.837 3.41 1.252.615 1.678 1.017 1.678 1.565-.013.842-1.012 1.23-1.944 1.23-1.293 0-1.985-.2-3.038-.668l-.426-.2-.453 2.821c.76.347 2.158.656 3.61.67 3.397 0 5.609-1.686 5.635-4.294.013-1.431-.852-2.528-2.717-3.424-1.133-.575-1.826-.963-1.826-1.551.013-.535.586-1.083 1.864-1.083a5.481 5.481 0 012.412.481l.293.134.44-2.715zM33.354 11.345c.267-.722 1.293-3.517 1.293-3.517-.014.027.266-.735.426-1.203l.226 1.083s.613 3.009.746 3.637h-2.69zm3.996-8.117h-2.504c-.772 0-1.358.227-1.692 1.043l-4.808 11.528h3.397l.679-1.886h4.156c.093.441.387 1.886.387 1.886h2.997L37.35 3.228zM11.376 3.228L8.206 11.8l-.347-1.739c-.586-2.006-2.424-4.185-4.476-5.269l2.904 10.993h3.424l5.088-12.557h-3.423z"></path>    <path d="M5.262 3.228H.053L0 3.482c4.063 1.043 6.754 3.558 7.859 6.58L6.727 4.285c-.187-.803-.76-1.03-1.465-1.057z" fill="#FAA61A"></path>  </g>  <g fill-rule="nonzero">    <path d="M103.85 4l-.567 3.214a2.156 2.156 0 01-.716 4.062L102 14.49A5.364 5.364 0 00103.85 4zM100.205 9.196c0-1.097.83-2.01 1.896-2.138l.566-3.214a4.869 4.869 0 00-.304-.01A5.365 5.365 0 0097 9.195a5.368 5.368 0 003.818 5.137l.566-3.216a2.156 2.156 0 01-1.18-1.92z" fill="#00ADBB"></path>    <path d="M116.731 4c-.546 0-1.149.302-1.389.844l-2.553 5.8-.92-5.8c-.108-.542-.48-.844-1.068-.844h-3.235l2.767 9.631c.05.185.06.39.023.605-.145.804-.92 1.456-1.731 1.456h-1.812c-.46 0-.762.282-.91.921L105.5 19h3.19c1.664 0 3.619-.828 4.923-3.12L120 4h-3.269zM85.392 9.946l.597-3.36h2.195l.483-2.715h-2.193l.275-1.545C86.917 1.377 86.455 1 85.5 1h-1.927l-.51 2.871h-1.583L81 6.586h1.599l-.678 3.823c-.62 3.482 2.53 3.924 4.195 3.924.361 0 .532-.022.697-.04l.537-3.027c-.08.005-.19.008-.325.008-.67 0-1.84-.156-1.633-1.328zM92.79 6.42l.207-1.152c.169-.952-.293-1.331-1.252-1.331H89.85L88 14.333h3.528l.685-3.858c.1-.562.245-1.028.433-1.412.787-1.556 2.202-1.818 3.038-1.818.43 0 .704.063.704.063L97 3.874s-.198-.04-.404-.04c-1.57 0-3.1 1.169-3.806 2.586zM119.606 14.566c0-.113-.055-.208-.157-.284a.622.622 0 00-.376-.115h-.573V15.5h.233v-.544h.254l.387.544h.273l-.405-.568c.241-.058.364-.181.364-.366zm-.873.232v-.467h.314c.093 0 .17.021.229.066.06.046.089.102.089.169a.196.196 0 01-.09.167.39.39 0 01-.228.065h-.314z" fill="#323E48" fill-rule="nonzero"></path>    <path d="M119.682 14.15a1.04 1.04 0 00-.765-.317 1.05 1.05 0 00-.766.317 1.049 1.049 0 00-.318.766c0 .3.107.555.318.765.212.211.468.319.766.319.3 0 .556-.108.765-.319a1.04 1.04 0 00.318-.765c0-.298-.106-.554-.318-.766zm-.12 1.419a.873.873 0 01-.645.27.871.871 0 01-.644-.27.895.895 0 01-.264-.653c0-.255.088-.473.264-.652a.87.87 0 01.644-.271c.25 0 .467.09.644.27.18.18.269.398.269.653a.89.89 0 01-.269.653z" fill="#323E48" fill-rule="nonzero"></path>    </g></g></svg></label>
            </form>
        </div>
    </div>
{{--    <div id="iyzipay-checkout-form" class="responsive"></div>--}}


    <!-- script source should be added to the page -->
    <script src="https://static.iyzipay.com/plugins/v1/iyzico-buttons.min.js"></script>
</div>

{{--<script>--}}
{{--    new iyzico.buttons({--}}
{{--        locale: "en_EN",--}}
{{--        selector: "#iyzico-button",--}}
{{--        buttonType: "pay",--}}
{{--        style: {--}}
{{--            color: "orange",--}}
{{--            shape: "rect",--}}
{{--            tagline: "logo"--}}
{{--        },--}}
{{--        form: {--}}
{{--            name: "iyzico-form",--}}
{{--            data: "'X-CSRFToken':'{{ csrf_token() }}'",--}}
{{--            action: "{{route('pay')}}",--}}
{{--        },--}}
{{--        // onSubmit: function () {--}}
{{--        //     console.log("iyzico button onSubmit");--}}
{{--        // }--}}
{{--    });--}}
{{--</script>--}}
