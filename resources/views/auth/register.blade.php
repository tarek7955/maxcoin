@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
<div class="col-md-6">
<center>
<div style="margin-top:80px">
<h2 style="color:white; font-size:40px" >Welcome to our digital wallet</h2>
<h5 style="color:white" >Fast, Secure and Exchange your coins to supported currencies.</h5>


</div>
</center>

<div class="row" style="color: white;margin-top:100px">
<div class="col-md-4" style="color:white">
    <div class="icon-set">
      <div>
        <ng-switch on="name" name="pay-online" class="ng-isolate-scope">
<i ng-switch-when="pay-online" class="ng-scope">
  <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="42" cy="42" r="41" stroke="#41AEB5" stroke-width="2"></circle>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.261 3.39931C39.1136 3.25058 39.9916 3.39165 40.7545 3.7995C41.9311 4.50482 42.6004 5.81885 42.4771 7.18348C42.4771 8.50978 41.4939 9.98635 39.7871 11.2022L39.1724 11.6208C38.2629 12.2403 36.4075 13.5037 33.0382 15.7715L28.6806 18.7384L26.3209 20.3085C25.0612 21.3159 23.4983 21.8694 21.8846 21.8786C20.527 21.8418 19.199 21.4753 18.0148 20.8114L16.5203 20.0264L14.2707 18.8013L12.5559 17.9073L10.8963 17.0196C10.705 16.9122 10.5051 16.8202 10.2985 16.7451L9.93667 17.0042L7.67134 18.5268C7.10398 18.8718 6.41342 18.9485 5.78355 18.7384L5.62628 18.6755C5.05392 18.4072 4.60648 17.9303 4.37556 17.3416L0.198921 7.7646C-0.323507 6.57323 0.218508 5.1856 1.41027 4.66275C8.26127 1.47656 9.91305 0.792713 12.1941 0.792713C14.4998 0.67005 16.7609 1.4597 18.4867 2.99146C18.8254 3.30425 19.1458 3.63697 19.4463 3.9881C19.5896 4.14143 19.742 4.28556 19.9025 4.42049C20.0913 4.51402 20.3115 4.60755 20.5475 4.69495L22.9701 3.02212C25.1326 1.51336 25.3067 1.39223 25.4858 1.27877L25.5343 1.2481C26.5208 0.461522 27.7405 0.0229994 29.0031 0C29.8559 0.00919977 30.6961 0.205461 31.4651 0.573452C31.818 0.729848 32.1551 0.918443 32.4719 1.1377C33.1463 0.840245 33.8738 0.679249 34.6114 0.666983C36.2479 0.815713 37.6605 1.87215 38.261 3.39931ZM36.098 4.25489C36.3103 4.11843 36.531 3.99423 36.7587 3.88537C36.3795 3.00066 35.5661 2.37507 34.6114 2.23708C33.497 2.32141 32.43 2.7216 31.5359 3.39165L27.3199 6.24051C28.3657 6.81396 29.0408 7.88573 29.1054 9.07557L36.098 4.25489ZM23.9219 4.31009L25.1779 3.44838L25.298 3.36558C26.2285 2.72773 26.2724 2.6986 26.4232 2.58207L26.494 2.53454C27.2126 1.95342 28.1021 1.62223 29.0268 1.59309C29.6515 1.60383 30.2663 1.75102 30.828 2.02548L30.6707 2.11901L25.3771 5.69925H25.259C24.343 5.62259 23.4336 5.47999 22.5375 5.27453L23.9219 4.31009ZM32.1337 14.508C35.8463 12.0118 38.3948 10.2915 38.8667 9.95415L38.8588 9.93115C40.1174 9.0357 40.9039 7.96853 40.9039 7.15895C41.0099 6.3739 40.6514 5.59652 39.9837 5.16567C38.9874 4.72868 37.832 4.87128 36.9711 5.53519L28.6412 11.3203C28.2716 11.7604 26.9266 13.0161 23.8589 13.0161C23.1766 13.0131 22.4956 12.9579 21.8217 12.8505C19.3127 12.5209 16.8711 11.8002 14.5852 10.7162L15.3247 9.3347C17.4568 10.3237 19.7269 10.9861 22.0577 11.2973C24.4725 11.65 25.8882 11.2651 26.6748 10.8649C26.7942 10.7239 26.9229 10.5889 27.0602 10.4647L27.3749 10.1504L27.4929 9.84528C27.5127 9.76402 27.5258 9.68275 27.5322 9.60149V9.31016C27.5215 8.29819 26.78 7.44261 25.7781 7.28468L25.6523 7.37208L25.5658 7.24635C25.4383 7.22335 25.3096 7.20802 25.1804 7.19882C23.69 7.08075 22.2148 6.81703 20.7755 6.41377C20.2194 6.24511 19.6776 6.03198 19.1553 5.77745L19.0451 5.71459C18.7819 5.51219 18.5372 5.28527 18.3136 5.03994C18.0428 4.72101 17.7539 4.41589 17.4484 4.12916C16.0061 2.85806 14.1138 2.21714 12.1941 2.34747C10.33 2.34747 9.0006 2.83353 2.03947 6.08411C1.64705 6.28037 1.47508 6.74803 1.64618 7.15128L5.85432 16.808C5.94841 16.995 6.10387 17.1453 6.29484 17.2312L6.30272 17.2404C6.42063 17.2787 6.5465 17.2787 6.86115 17.1146H6.90042L9.0006 15.6933C9.35836 15.3912 9.80071 15.2087 10.267 15.1673C10.7345 15.2149 11.1843 15.3713 11.5806 15.6227L13.256 16.509L14.9471 17.4198L17.2517 18.6372L18.7226 19.4222C19.6847 19.9666 20.7639 20.2702 21.8689 20.3085C23.1647 20.3069 24.4181 19.8485 25.4084 19.0144L27.7682 17.4443L32.1337 14.508Z" transform="translate(21.2351 44.002)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9128 17.1761C17.0764 21.4066 13.362 24.4612 9.04049 24.4691C4.70285 24.4691 0.976529 21.3948 0.161831 17.1429C-0.65311 12.8909 1.67355 8.66047 5.70529 7.06476C6.59494 2.91633 10.2841 -0.0348455 14.5341 0.000310771C18.7841 0.0374201 22.4228 3.05109 23.2417 7.2132C24.0605 11.3753 21.8337 15.5394 17.9128 17.1761ZM21.582 7.05695C20.729 3.82453 17.8012 1.57062 14.4519 1.56867C11.2986 1.57258 8.49606 3.57648 7.47506 6.55305C10.0918 6.07844 12.7854 6.78156 14.8327 8.47687C16.8798 10.1722 18.0708 12.6839 18.0859 15.3382C20.9995 13.6898 22.435 10.2894 21.582 7.05695ZM7.07394 8.2425C9.32248 7.6214 11.7329 8.08625 13.5869 9.50031C15.4406 10.9144 16.5236 13.1136 16.5129 15.4417V16.0159C14.2841 16.6683 11.8772 16.2347 10.0188 14.8441C8.16061 13.4534 7.06906 11.2679 7.07394 8.94953V8.2425ZM5.50094 8.9339V8.8714C2.53488 10.4632 1.00168 13.8362 1.75631 17.1116C2.51095 20.387 5.3674 22.7542 8.73166 22.8929C12.0959 23.0296 15.1374 20.9046 16.1589 17.7034C13.5341 18.2171 10.8166 17.5316 8.75265 15.8343C6.68869 14.1351 5.49533 11.6038 5.50094 8.9339Z" transform="translate(33.041 18.0566)" fill="white"></path>
    <path d="M7.37803 14.7275C11.4528 14.7275 14.7561 11.4306 14.7561 7.36374C14.7561 3.29686 11.4528 0 7.37803 0C3.30326 0 0 3.29686 0 7.36374C0 11.4306 3.30326 14.7275 7.37803 14.7275Z" transform="translate(34.7036 26.1328)" fill="#514766"></path>
    <path d="M4.45986 3.3757C4.24938 3.16417 4.01126 2.98197 3.75194 2.83402C3.50899 2.70834 3.23901 2.64367 2.96537 2.64561C2.65877 2.62766 2.35712 2.72896 2.12374 2.92822C1.91797 3.13686 1.80707 3.42068 1.81698 3.71327C1.80704 3.96666 1.90073 4.21319 2.07655 4.39626C2.27514 4.59151 2.5002 4.75799 2.74513 4.89084C3.01257 5.04262 3.30097 5.19439 3.61036 5.34617C3.91706 5.49585 4.20707 5.67742 4.47559 5.88785C4.7477 6.10342 4.97484 6.37013 5.14417 6.6729C5.33 7.02841 5.41948 7.42624 5.40374 7.82692C5.42494 8.42565 5.23884 9.01339 4.87674 9.49122C4.49497 9.95635 3.95419 10.264 3.35866 10.3548V11.7757H2.28105V10.4176C1.85949 10.3646 1.44842 10.2482 1.06187 10.0722C0.667437 9.90373 0.307471 9.66422 0 9.36561L0.684316 8.29009C0.970467 8.53328 1.2847 8.74149 1.62034 8.91028C1.93554 9.06667 2.28301 9.14732 2.63501 9.14579C2.98284 9.17422 3.32781 9.06415 3.59463 8.83963C3.81517 8.60474 3.92898 8.28953 3.90926 7.96822C3.92674 7.68301 3.83382 7.40199 3.64969 7.18318C3.45595 6.96731 3.23053 6.78202 2.9811 6.63365C2.71367 6.46617 2.42526 6.30654 2.11588 6.15477C1.81035 6.00606 1.5205 5.82723 1.25065 5.62093C0.983178 5.41608 0.756424 5.16314 0.582062 4.87514C0.40008 4.54394 0.312996 4.16911 0.33036 3.79178C0.318075 3.22322 0.504396 2.66812 0.857362 2.22168C1.22102 1.79657 1.7269 1.51762 2.28105 1.43664V0H3.33506V1.38168C3.72079 1.4237 4.09193 1.55255 4.42053 1.7585C4.7101 1.95875 4.97422 2.19337 5.2071 2.4572L4.45986 3.3757Z" transform="translate(39.3286 27.6094)" fill="white"></path>
  </svg>
</i>

</ng-switch>
      </div>
      <div>
        <translate style="margin-left:8px" class="ng-scope">Pay online</translate>
      </div>
    </div>
</div>
<div class="col-md-4">
    <div class="icon-set">
      <div>
        <ng-switch on="name" name="send-and-receive-money" class="ng-isolate-scope">
<i ng-switch-when="send-and-receive-money" class="ng-scope">
  <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M83 42C83 64.6437 64.6437 83 42 83C19.3563 83 1 64.6437 1 42C1 19.3563 19.3563 1 42 1C64.6437 1 83 19.3563 83 42Z" stroke="#41AEB5" stroke-width="2"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.9251 1.43927H4.51489C2.81874 1.43927 1.44269 2.81177 1.44269 4.50614V22.7911C1.44269 24.4854 2.81874 25.8579 4.51489 25.8579H37.9251C39.6212 25.8579 40.9973 24.4854 40.9973 22.7911V4.50614C40.9973 2.81177 39.6212 1.43927 37.9251 1.43927ZM4.51489 0C2.02138 0 0 2.01747 0 4.50614V22.7911C0 25.2797 2.02138 27.2972 4.51489 27.2972H37.9251C40.4186 27.2972 42.4399 25.2797 42.4399 22.7911V4.50614C42.4399 2.01747 40.4186 0 37.9251 0H4.51489Z" transform="translate(21 37.7012)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.28995C0 3.71183 3.71859 0 8.30636 0C12.8941 0 16.6127 3.71183 16.6127 8.28995C16.6127 12.8681 12.8941 16.5799 8.30636 16.5799C3.71859 16.5799 0 12.8681 0 8.28995ZM8.30636 1.43927C4.51595 1.43927 1.44269 4.50614 1.44269 8.28995C1.44269 12.0738 4.51595 15.1406 8.30636 15.1406C12.0968 15.1406 15.17 12.0738 15.17 8.28995C15.17 4.50614 12.0968 1.43927 8.30636 1.43927Z" transform="translate(34.3853 20)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.941283C0 0.421427 0.421427 0 0.941283 0H28.2951C28.815 0 29.2364 0.421427 29.2364 0.941283C29.2364 1.46114 28.815 1.88257 28.2951 1.88257H0.941283C0.421427 1.88257 0 1.46114 0 0.941283Z" transform="translate(27.6016 52.7617)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.941283C0 0.421427 0.421427 0 0.941283 0H7.54671C8.06656 0 8.48799 0.421427 8.48799 0.941283C8.48799 1.46114 8.06656 1.88257 7.54671 1.88257H0.941283C0.421427 1.88257 0 1.46114 0 0.941283Z" transform="translate(27.6016 58.4102)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.941283C0 0.421427 0.421427 0 0.941283 0H7.54671C8.06656 0 8.48799 0.421427 8.48799 0.941283C8.48799 1.46114 8.06656 1.88257 7.54671 1.88257H0.941283C0.421427 1.88257 0 1.46114 0 0.941283Z" transform="translate(48.3501 58.4102)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.48126 18.9258C14.7176 18.9258 18.9625 14.6891 18.9625 9.4629C18.9625 4.23668 14.7176 0 9.48126 0C4.24491 0 0 4.23668 0 9.4629C0 14.6891 4.24491 18.9258 9.48126 18.9258Z" transform="translate(32.7385 27.0273)" fill="#514766"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.1825C0 4.55917 4.56757 0 10.2026 0C15.8376 0 20.4052 4.55917 20.4052 10.1825C20.4052 15.8059 15.8376 20.3651 10.2026 20.3651C4.56757 20.3651 0 15.8059 0 10.1825ZM10.2026 1.43927C5.36493 1.43927 1.44269 5.35347 1.44269 10.1825C1.44269 15.0116 5.36493 18.9258 10.2026 18.9258C15.0403 18.9258 18.9625 15.0116 18.9625 10.1825C18.9625 5.35347 15.0403 1.43927 10.2026 1.43927Z" transform="translate(32.0173 26.3066)" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25188 3.86917C4.96269 3.59544 4.68383 3.3875 4.41529 3.24537C4.14676 3.10324 3.82659 3.03217 3.45477 3.03217C3.03132 3.03217 2.70082 3.14008 2.46327 3.35592C2.22572 3.57175 2.10695 3.88497 2.10695 4.29557C2.10695 4.61143 2.21023 4.872 2.41679 5.07731C2.62336 5.28261 2.88414 5.47212 3.19915 5.64584C3.51416 5.81956 3.85241 5.99327 4.2139 6.16699C4.57538 6.34071 4.91363 6.54864 5.22864 6.7908C5.54365 7.03295 5.80443 7.33037 6.011 7.68308C6.21756 8.03578 6.32084 8.47533 6.32084 9.00175C6.32084 9.7598 6.11428 10.3941 5.70115 10.9048C5.28802 11.4154 4.69416 11.7444 3.91954 11.8918V13.5184H2.68016V11.9392C2.20506 11.8865 1.72739 11.7576 1.24713 11.5523C0.766865 11.3469 0.35116 11.0758 0 10.7389L0.805598 9.50712C1.16709 9.80191 1.53373 10.0388 1.90555 10.2178C2.27736 10.3968 2.675 10.4863 3.09845 10.4863C3.60454 10.4863 3.98151 10.3678 4.22939 10.1309C4.47727 9.89403 4.6012 9.55976 4.6012 9.12809C4.6012 8.78066 4.49792 8.49113 4.29136 8.2595C4.08479 8.02788 3.82401 7.81731 3.509 7.6278C3.19399 7.43829 2.85574 7.25668 2.49425 7.08296C2.13277 6.90924 1.79452 6.70394 1.47951 6.46705C1.1645 6.23016 0.903716 5.9459 0.697152 5.61425C0.490587 5.28261 0.387307 4.86937 0.387307 4.37454C0.387307 3.63755 0.593868 3.02428 1.007 2.5347C1.42013 2.04513 1.97784 1.73718 2.68016 1.61084V0H3.91954V1.57926C4.4153 1.64243 4.84133 1.78719 5.19765 2.01355C5.55398 2.23991 5.87673 2.50575 6.16592 2.81107L5.25188 3.86917Z" transform="translate(39.0593 29.7305)" fill="white"></path>
  </svg>
</i>

</ng-switch>
      </div>
	  
      <div>
        <translate style="margin-left:-20px" class="ng-scope">Send &amp; receive money</translate>
      </div>
    </div>
</div>
<div class="col-md-4">
    <div class="icon-set">
      <div>
        <ng-switch on="name" name="prepaid-mastercard" class="ng-isolate-scope">
<i ng-switch-when="prepaid-mastercard" class="ng-scope">
  <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M83 42C83 64.6437 64.6437 83 42 83C19.3563 83 1 64.6437 1 42C1 19.3563 19.3563 1 42 1C64.6437 1 83 19.3563 83 42Z" stroke="#41AEB5" stroke-width="2"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.64307 0C1.63428 0 0 1.63477 0 3.64648C0 5.65625 1.63428 7.29102 3.64307 7.29102H5.82861V32.8125C5.82861 34.0176 6.80933 35 8.0144 35H31.3293C32.5344 35 33.5151 34.0176 33.5151 32.8125V7.29102H35.7009C37.7095 7.29102 39.3438 5.65625 39.3438 3.64648C39.3438 1.63477 37.7095 0 35.7009 0H25.5007H24.0435H3.64307ZM3.64282 1.45898H5.82861V5.83398H3.64282C2.43774 5.83398 1.45703 4.85156 1.45703 3.64648C1.45703 2.43945 2.43774 1.45898 3.64282 1.45898ZM20.4004 1.45898H7.28589V32.8125C7.28589 33.2148 7.61304 33.541 8.0144 33.541H20.4004V1.45898ZM21.8577 1.45898H27.6863V25.5215C27.6863 25.9238 28.0127 26.25 28.415 26.25C28.8171 26.25 29.1436 25.9238 29.1436 25.5215V1.45898H32.0579V32.8125C32.0579 33.2148 31.7307 33.541 31.3293 33.541H21.8577V1.45898ZM35.7009 1.45898H33.5151V5.83398H35.7009C36.906 5.83398 37.8867 4.85156 37.8867 3.64648C37.8867 2.43945 36.906 1.45898 35.7009 1.45898ZM13.1143 2.91602C12.7122 2.91602 12.3857 3.24219 12.3857 3.64453V11.666C12.3857 12.0684 12.7122 12.3945 13.1143 12.3945C13.5166 12.3945 13.843 12.0684 13.843 11.666V3.64453C13.843 3.24219 13.5166 2.91602 13.1143 2.91602ZM11.6575 23.332C11.6575 21.7246 12.9646 20.416 14.5718 20.416C16.1792 20.416 17.4861 21.7246 17.4861 23.332C17.4861 24.0059 17.2554 24.6445 16.8457 25.1562C17.2554 25.666 17.4861 26.3047 17.4861 26.9785C17.4861 28.5859 16.1792 29.8945 14.5718 29.8945C12.9646 29.8945 11.6575 28.5859 11.6575 26.9785C11.6575 26.3047 11.8884 25.666 12.2979 25.1562C11.8884 24.6445 11.6575 24.0059 11.6575 23.332Z" transform="translate(22 25)" fill="white"></path>
  </svg>
</i>

</ng-switch>
      </div>
      <div>
        <translate style="margin-left:-6px" class="ng-scope">Cashout your fund<sup></sup></translate>
      </div>
    </div>
</div>
</div>
</div>

<div class="col-md-6">
 <div class="login-form">
      <div class="main-div">
	  
         
			<center>
      <h2 >Register</h2>
   </center>
            <div class="form-group">
			
               Already have an account? 
               <a  href="{{ route('login') }}">
               {{ __('Login') }}
               </a>
            </div>
            <form method="POST" action="{{ route('register') }}">
                        @csrf
            <div class="form-group">
               <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus Placeholder="Name">
               @if ($errors->has('name'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('name') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required Placeholder="Email">
               @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required Placeholder="Password">
               @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
            </div>
            <div class="forgot">
               @if (Route::has('password.request'))
               <a  href="{{ route('password.request') }}">
               {{ __('Forgot Your Password?') }}
               </a>
               @endif
            </div>
            <button type="submit"style="background-color:#E0E0E0; border:0px;color:black;" class="btn btn-primary">
            {{ __('Register') }}
            </button>
         </form>
      </div>
   </div>
</div>
</div>


   
  
</div>
@endsection