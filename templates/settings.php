
<style>   
.grtitle {
    color: #1bbc9b;
    margin: 12px -15px;
    padding: 0;
}
/* Font */

@font-face {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 400;
    src: local("Montserrat-Regular"), url("https://fonts.gstatic.com/s/montserrat/v5/zhcz-_WihjSQC0oHJ9TCYBsxEYwM7FgeyaSgU71cLG0.woff") format("woff");
}
@font-face {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 700;
    src: local("Montserrat-Bold"), url("https://fonts.gstatic.com/s/montserrat/v5/IQHow_FEYlDC4Gzy_m8fcgFhaRv2pGgT5Kf0An0s4MM.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 300;
    src: local("Open Sans Light"), local("OpenSans-Light"), url("https://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 400;
    src: local("Open Sans"), local("OpenSans"), url("https://fonts.gstatic.com/s/opensans/v10/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 600;
    src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url("https://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSnhCUOGz7vYGh680lGh-uXM.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 700;
    src: local("Open Sans Bold"), local("OpenSans-Bold"), url("https://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff") format("woff");
}
/* End */

html,
.outerContainer {
    height: 100%;
    background: #fff;
}
body {
    font-family: "Open Sans", sans-serif;
    padding-top: 45px;
}
a,
a:focus {
    outline: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
    outline: none;
}
h1 {
    color: #333;
    font-size: 30px;
}
h3 {
    /*    border-bottom: 1px solid #ddd;*/
    /*    color: #428bca;*/
    
    color: #333;
    margin-bottom: 20px;
    padding-bottom: 10px;
}
h4 a {
    color: #fff;
}
th {
    font-weight: 600;
}
td > * {
    font-size: 14px;
    margin: 0;
}
.modal-body .form-signup {
    overflow: hidden;
}
.navSide ul li a:focus {
    outline: medium none;
    text-decoration: none;
}
.navSide ul li a:hover,
.navSide ul li.active a,
.navSide ul li.open a {
    background: #444;
    text-decoration: none;
}
.navSide ul.dropdown-menu li a:hover,
.navSide ul.dropdown-menu li.active a {
    background: #fff;
    color: #333;
}
.navSide ul li a {
    color: #fff;
    display: block;
    font-size: 15px;
    font-weight: 300;
    padding: 10px;
    text-transform: capitalize;
}
.navSide ul li {
    /*    border-bottom: 1px solid #555;*/
    
    color: #fff;
    float: left;
}
.navSide ul li.active {
    /*    border-right: 4px solid #419bca;*/
}
.navSide ul.dropdown-menu li {
    background: #ddd;
    float: none;
    color: #333;
}
.navSide ul.dropdown-menu li a {
    color: #333;
    background: none;
}
.modal-body .form-signup .btnBlock {
    float: right;
}
.logo {
    /*    border-bottom: 1px solid #555;*/
    
    margin: 0;
    padding: 8px 15px 0;
    text-align: left;
    color: #fff;
    font-style: italic;
    float: left;
    font-weight: bold;
    text-shadow: 1px 2px 3px #333;
    font-size: 19px;
}
.logo img {
    margin-right: 5px;
}
.menu {
    float: right;
}
.navSide ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
    float: left;
    /*    overflow: hidden;*/
}
.headingBlk h3 {
    color: #1bbc9b;
    margin: 12px -15px;
    padding: 0;
}
.navSide {
    background: #1bbc9b;
    width: 100%;
    /*    border-right: 1px solid #000;*/
    /*    height: 100%;*/
    /*    padding: 10px 0;*/
    
    position: fixed;
    top: 0;
    /*    width: 215px;*/
    
    margin-left: -15px;
    z-index: 10000000;
}
.containerInner {
    padding: 10px 20px 15px;
    min-height: 480px;
}
.headingBlk {
    border-bottom: 1px solid #bbb;
    padding: 0 15px;
    margin-bottom: 15px;
    /*    overflow: hidden;*/
}
.emailBlock {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin: 10px auto;
    font-size: 15px;
    color: #666;
    background-color: #fff;
}
.emailHead {
    padding: 20px;
    background-color: #1bbc9b;
}
.emailHead h3 {
    margin: 0;
}
.emailInner {
    padding: 20px;
    border: 1px solid #e0e0e0;
}
.emailInner h3 {
    color: #333;
    margin-top: 0;
    font-size: 16px
}
.emailFoot {
    text-align: center;
    padding: 20px;
    border-left: 1px solid #e0e0e0;
    border-right: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
}
.emailFoot .appsLink {}.emailInner p {
    font-size: 14px;
}
.emailInner ul {
    list-style: none outside none;
    padding: 0;
}
.errormsg {
    color: #ff0000;
    display: block;
    font-size: 12px;
    padding-top: 5px;
}
.emailText {
    cursor: not-allowed;
}
label {
    font-weight: 600;
}
.navSide .dropdown-menu {
    background: none repeat scroll 0 0 #111;
    border-radius: 0;
    border: solid 1px #aaa;
    border-top: none;
    box-shadow: none;
}
.navSide .dropdown-menu li a:hover {
    color: #fff;
}
#loader {
    position: absolute;
    background: rgba(255, 255, 255, .7) url("../img/loader.GIF") no-repeat center center;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    text-indent: -999em;
}
/* add competetion */

.row.chkBlock {
    padding: 0 20px;
    margin-bottom: 10px;
}
[id^="block_container_"] {
    /*    border-bottom: 1px solid #ddd;*/
    
    margin-bottom: 15px;
    /*    padding-bottom: 25px;*/
}
/*.chkBlock .form-group {    margin-bottom: 0;}*/

.dropdownBlock {
    list-style: none outside none;
    margin-bottom: 15px;
    padding: 0;
}
.dropdownBlock li {
    display: inline-block;
    vertical-align: top;
}
.dropdownBlock .dropdown-menu li {
    display: block;
}
.dropdownBlock .open>.dropdown-menu {
    margin-bottom: 50px;
}
#entry_form,
#competition_form,
#prize_form,
#intall_app,
#app_users_entries,
#winners_tab,
#app_users {
    padding: 15px;
    border: solid 1px #ddd;
    border-top: none;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}
/* btn */

.btn {
    margin-right: 5px;
}
.message_block {
    padding: 15px;
    text-align: center;
    font-size: 14px;
}
.msg {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    margin-bottom: 15px;
}
.bg-primary,
.bg-info,
.bg-danger {
    padding: 10px;
}
.ConnectBlock .helpNote {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    padding: 0 7px;
}
.glyphicon-asterisk {
    color: #a94442;
    font-size: 12px;
    vertical-align: top;
}
.close {
    line-height: .8;
}
.glyphicon.glyphicon-remove-circle {
    font-size: 20px;
}
/* uploadify */

.uploadify {
    height: 29px !important;
}
[id^="SWFUpload_"] {
    height: 26px !important;
    cursor: pointer;
}
.uploadify-button {
    background-color: #505050 !important;
    background-image: none !important;
    -webkit-border-radius: 4px !important;
    -moz-border-radius: 4px !important;
    border-radius: 4px !important;
    border: 1px solid #808080 !important;
    text-indent: 0 !important;
    height: 26px !important;
    line-height: 24px !important;
}
span.uploadify-button-text {
    text-indent: 0 !important;
}
/* play page */

.playHead {
    background: #FFFFFF;
    color: #888;
    margin-bottom: 15px;
    text-align: center;
    text-align: center;
}
.playHead b {
    display: block;
}
.playHead > div {
    border-left: 1px solid #e3e3e3;
    padding: 5px;
    float: none;
    display: inline-block;
    vertical-align: top;
    margin: 0 -2px;
}
.playHead > div:first-child {
    border-left: medium none;
}
.compNameBlk > h3 {
    margin: 0;
    color: #fff;
}
.compNameBlk {
    text-align: center;
}
.playBlock {
    background: #1bbc9b;
}
.conInner {
    width: 50%;
    margin: 0 auto;
    min-height: 525px;
}
.playBlock .footer p {
    color: #fff;
}
.playBlock .footer p a {
    color: #E9E9E9;
}
.playBlock label {
    color: #888;
    font-weight: 500;
}
.playBlock p {
    color: #888;
}
.popover-content .checkbox > label {
    font-size: 13px;
}
.footer {
    text-align: center;
}
.panel {
    background: #eeeff1;
    padding: 5px 15px;
    border-radius: 5px;
}
.panel .bg-primary {
    background: #fff;
    color: #888;
    cursor: pointer;
}
.panel .addTooltip {
    background: #f5f5f5;
}
.compNameBlk > p {
    color: #fff;
}
.compNameBlk > p a {
    color: #000;
}
.playBlock > .form-group {
    padding: 0 10px;
}
.playBlock .form-group .checkBox {
    padding: 0 5px;
}
.panel h4 + div {
    padding: 0 10px;
}
.panel h4 {
    font-size: 17px;
}
.playBlock .btn-success,
.btn-info {
    background: #16bc9e;
    border-color: #16bc9e;
}
.playBlock .btn-success:hover,
.btn-info:hover {
    background: #13a88d;
}
.form-group p small {
    display: block;
    margin-top: 10px;
}
.fb_iframe_widget,
.fb_iframe_widget span,
.fb_iframe_widget iframe {
    width: 100% !important;
}
.twitter-tweet.twitter-tweet-rendered {
    max-width: 100% !important;
    width: 100% !important;
}
/* install block */

.installblock {
    /*  background: #1bbc9b; */
    
    padding-bottom: 50px;
}
/* install block */

.installblock h1 {
    color: #1bbc9b;
}
.installblock .installInner {
    background: #edeef0;
    border-radius: 8px;
    padding: 15px;
}
.installblock .btn-primary,
.btn-primary {
    background: #16bc9e;
    border-color: #16bc9e;
    text-transform: capitalize;
}
.installblock .btn-primary:hover,
.btn-primary:hover {
    background: #13a88d;
    border-color: #108f78;
}
.installblock h3 {
    color: #333;
    font-size: 18px;
    margin: 10px 20px;
}
.installblock h3 + div {
    background: #fff;
    margin: 10px 20px 20px;
    padding: 20px;
}
.thankYouBlock {
    background: #1bbc9b;
    width: 100%;
    height: 100%;
}
#active_game .table-bordered,
#scheduled_game .table-bordered,
#finished_game .table-bordered {
    border-top: none;
}
.imageHeader {
    max-height: 315px;
    overflow: hidden;
    box-shadow: 0 0 10px #555;
}
/*.container-fluid.playBlock {  height: 100%;}*/

footer {
    background: #fff;
    border-top: 5px solid #333;
    /*margin: 0 -15px;	padding: 0 0 0 15px;	position: absolute;*/
    
    overflow: hidden;
    width: 100%;
    bottom: 0;
}
footer.footText {
    border-top: 5px solid #D3D3D3;
}
.gratifiLogo {
    background: #333;
    border-radius: 4px;
    color: #fff;
    margin: 0;
    padding: 5px;
    text-decoration: none;
    position: relative;
    top: 22px;
    text-transform: uppercase;
    font-style: italic;
    font-weight: bold;
}
.gratifiLogo:hover,
.gratifiLogo:focus {
    color: #fff;
    background: #111;
    text-decoration: none;
}
.infoBlock {
    background: none repeat scroll 0 0 #1bbc9b;
    color: #fff;
    font-size: 23px;
    height: 100%;
    text-align: center;
    width: 100%;
}
.infoBlock > div {
    padding: 200px 25px;
}
.infoBlock img {
    width: 100px;
}
.infoBlock p {
    margin: 20px 0;
}
.bg-success {
    padding: 10px;
    text-align: center;
}
.installInfoBlk {
    padding: 10px 15px;
    background: #fff;
    margin-bottom: 20px;
}
.installInfoBlk a {
    margin-bottom: 10px;
    display: inline-block;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary.active[disabled],
fieldset[disabled] .btn-primary.active {
    background: #ccc;
    border: solid 1px #ccc;
}
.popover-content > ul {
    list-style: outside none none;
    padding: 0;
}
.panel .shareBlock {
    background: none repeat scroll 0 0 #fff;
    margin: 5px auto 10px;
    padding: 10px;
    text-align: left;
}
.shareBlock p {
    color: #888;
    display: inline-block;
    font-weight: bold;
    margin-bottom: 0;
    margin-right: 10px;
    vertical-align: middle;
}
.shareBlock a {
    display: inline-block;
    margin: 0 1px;
    vertical-align: middle;
}
h4.emailHeading small {
    float: right;
    display: inline;
}
h4.emailHeading button {
    float: right;
}
h4.emailHeading {
    overflow: hidden;
}
.emailHeading > i {
    display: inline-block;
    margin-top: 10px;
    font-style: normal;
}
#couponRewardEmailDiv {
    margin-top: 20px;
}
@media only screen and (max-width: 810px) {
    .conInner {
        width: 90%;
    }
}
/*========== new styles ===========*/

.referrelBox {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: #f5f5f5;
    margin: 0;
}
.referrelBox h3 {
    padding-left: 15px;
}
.form-group > ul {
    list-style: outside none none;
    padding: 0;
}
.form-group > ul li {
    margin-bottom: 5px;
}
.headingBlk > * {
    float: none;
}
.storeTiming input[type="checkbox"] {
    margin: 2px 10px 0 0;
}
.storeTiming tr td {
    font-size: 13px;
}
.storeTiming input[type="text"] {
    border: 1px solid #ddd;
    font-size: 13px;
    padding: 5px !important;
}
#new_order_list.containerInner {
    padding-left: 0;
    padding-right: 0;
}
.form-group > li {
    list-style: outside none none;
}
.sizeDiv select {
    margin-right: 10px;
}
#cat_add_form .message_block,
#item_add_form .message_block,
#customer_add_form .message_block {
    visibility: hidden;
}
.logOut {
    margin: 4px 0 0 5px;
}
#myTab {
    margin-bottom: 20px;
}
.nav-tabs > li > a {
    color: #1bbc9b;
}
.voucherBlk td > a {
    text-decoration: underline;
    font-weight: bold;
}
.featureItem {
    overflow: hidden;
}
.featureItem li {
    float: left;
    width: 50%;
}
@media (max-width: 640px) {
    .logo {
        text-align: center;
        float: none;
        margin: 10px;
    }
}
.fbConnect {
    background: url("../img/fb-login.png") no-repeat !important;
    width: 202px;
    height: 46px;
    border: 0;
}
.fbConnect:hover {
    opacity: .8;
}
#item_add_form .row {
    padding: 10px 5%
}
#item_add_form .row_bg {
    background: #f5f5f5;
    padding: 0 5%;
    margin: 10px -15px;
    border-left: 1px dotted #fff;
}
#item_add_form .row_bg .col-lg-6,
#item_add_form .row .col-lg-6 {
    padding: 20px;
}
#item_add_form .row_bg .col-lg-6:first-child {
    border-right: 1px dotted #C5C5C5;
}
#item_add_form .row .col-lg-6:first-child {
    border-right: 1px dotted #DBDBDB;
}
.subsRow {
    padding: 20px 5% !important;
}
.modal.in .modal-dialog {
    margin-top: 60px;
}
#form-change_order_status .input-group-addon:first-child {
    border: 1px solid #ccc;
    border-right: 1px solid #ccc;
    margin-bottom: 20px;
    display: inline-block;
    width: 100%;
    border-radius: 5px;
    padding: 9px 12px;
}
#form-change_order_status .input-group-addon {
    display: block;
    margin-bottom: 20px;
    width: 100%;
}
/* Shopify */

body {
    padding: 0;
}
h2 {
    background: #7ab45f none repeat scroll 0 0;
    color: #fff;
    font: 22px "Arial";
    margin: 0;
    padding: 20px;
    text-align: center;
}
h2 img {
    margin-bottom: 5px;
}
.wrap {
    background: #333 none repeat scroll 0 0;
    margin: 20px 20px 0 2px;
}
.wrap h2 {
    margin-bottom: 40px;
    padding: 20px 0;
}
.wp-core-ui .notice.is-dismissible {
    margin: 0 20px 20px;
}
#zing-warning {
    display: none;
}
.ConnectBlock {
    text-align: left !important;
}
.form-horizontal .control-label {
    margin-bottom: 0;
    padding-top: 7px;
    text-align: right;
}
.helpNote {
    border-radius: 50%;
    padding: 0 7px;
}
.asterisk {
    font-size: 13px;
    color: #ff0000;
}
.points {
    font-size: 14px;
}
.ConnectBlock {
    width: 90%;
}
.ConnectBlock small {
    font-size: 11px;
}
.onoffswitch {
    -moz-user-select: none;
    position: relative;
    width: 73px;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    border: 2px solid #999999;
    border-radius: 16px;
    cursor: pointer;
    display: block;
    overflow: hidden;
}
.onoffswitch-inner {
    display: block;
    margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
    width: 200%;
}
.onoffswitch-inner::before,
.onoffswitch-inner::after {
    box-sizing: border-box;
    color: white;
    display: block;
    float: left;
    font-family: Trebuchet, Arial, sans-serif;
    font-size: 14px;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0;
    width: 50%;
}
.onoffswitch-inner::before {
    background-color: #16bc9e;
    color: #ffffff;
    content: "ON";
    padding-left: 10px;
}
.onoffswitch-inner::after {
    background-color: #eeeeee;
    color: #999999;
    content: "OFF";
    padding-right: 10px;
    text-align: right;
}
.onoffswitch-switch {
    background: #ffffff none repeat scroll 0 0;
    border: 2px solid #999999;
    border-radius: 16px;
    bottom: 0;
    display: block;
    margin: 5px 5px 10px;
    position: absolute;
    right: 41px;
    top: 0;
    transition: all 0.3s ease-in 0s;
    width: 18px;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0;
}
.ConnectBlock {
    background: #fff none repeat scroll 0 0;
    border: 2px solid #7ab45f;
    color: #333;
    font: 16px "arial", sans-serif;
    margin: 0 auto;
    padding: 50px;
    text-align: center;
    vertical-align: middle;
    overflow: hidden;
}
.ConnectBlock .form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
.ConnectBlock .form-group {
    margin-bottom: 15px;
}
.createCon {
    margin: 15px;
}
.createCon span {
    display: block;
    margin: 20px;
}
.createCon span a,
.btnInstall {
    background: #7ab45f none repeat scroll 0 0;
    color: #fff;
    border: none;
    border-bottom: #333 solid 2px;
    cursor: pointer;
    display: inline-block;
    font-size: 18px;
    margin: 0;
    padding: 10px 20px;
    text-decoration: none;
    width: 215px;
}
/* footer */

footer.footText {
    border-top: 5px solid #d3d3d3;
}
.footText a:hover {
    color: #fff;
}
footer {
    background: #fff none repeat scroll 0 0;
    border-top: 5px solid #333;
    overflow: hidden;
    padding: 0 15px;
    margin-top: 30px;
}
.pull-left {
    float: left !important;
}
.pull-right {
    float: right !important;
}
.gratifiLogo {
    background: #333 none repeat scroll 0 0;
    border-radius: 4px;
    color: #fff;
    font-style: italic;
    font-weight: bold;
    margin: 0;
    font-family: "Open Sans", sans-serif;
    padding: 5px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    top: 22px;
}
.logoAppsMav {
    display: inline-block;
    margin-right: 20px;
    vertical-align: middle;
    box-shadow: 0 0 15px #777;
}
</style>
<div class="wrap">
    <h2>
        <span class="logoAppsMav">
            <img src="<?=plugin_dir_url( __FILE__ )?>../img/appsmav-logo.png">
            </span>		WELCOME TO 
            <img width="30" height="30" src="<?=plugin_dir_url( __FILE__ )?>../img/gr-logo.jpg"> GRATISFACTION SETUP WIZARD	
            </h2>
			<div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-right: 1px solid rgb(204, 204, 204); border-left: 4px solid green; color: rgb(51, 51, 51); font-size: 12px; padding: 15px; margin-bottom: 15px;">				
				<p><img width="30" height="30" src="<?=plugin_dir_url( __FILE__ )?>../img/Video.png"> Watch Tutorial <a target="_blank" href="https://www.youtube.com/user/AppsMavOfficial">https://www.youtube.com/user/AppsMavOfficial</a></p>				
				
				<p>Gratisfaction is a very powerful application, which will help you increase engagement, traffic, leads &amp; sales. We would love to see your business grow through our applications &amp; are ready to provide you with awesome support.</p>
				
				<p>So if you face any problem installing this app, simply email the following to <a href="mailto:sales@appsmav.com">sales@appsmav.com</a></p>
				
				<ul style="margin: 0px 30px;">					
					<li>- Your WordPress website admin URL &amp; login credentials</li>					
					<li>- if you are not an existing customer, your contact details</li>					
					<li>- If you are an existing customer, your Apps Mav admin login credentials</li>				
				</ul>				
				<p>That is it. Our team will work with you to correctly install &amp; configure Gratisfaction.</p>				
				<p>All the best<br>Team Apps Mav</p>			
			</div>
            <div class="ConnectBlock">
                <form class="formGr form-horizontal" method="post" action="options.php">
                    <?php @settings_fields('grconnect-group'); ?>
                    <?php @do_settings_fields('grconnect-group'); ?>
                    <div class="form-group">
                        <label for="grconnect_appid" class="col-sm-5 control-label">Gratisfaction APP ID 
                            <span class="asterisk">*</span>
                            <button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default helpNote" type="button" data-original-title="Your Gratisfaction App ID can be found in the Gratisfaction app. Please login at www.appsmav.com . This step will only take a minute.">?</button>
                        </label>
                        <div class="col-sm-4">
                            <input type="text" name="grconnect_appid" id="grconnect_appid" value="<?php echo get_option('grconnect_appid'); ?>" maxlength="10" class="form-control /">
                            </div>
                    </div>
                    <div class="form-group">
						<label for="grconnect_secret" class="control-label col-sm-5">Gratisfaction App Secret 
							<span class="asterisk">*</span>
							<button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default helpNote" type="button" data-original-title="Your Gratisfaction App secret can be found in the Gratisfaction app. Please login at www.appsmav.com">?</button>
						</label>
					<div class="col-sm-4">
						<input type="text" name="grconnect_secret" maxlength="10" id="grconnect_secret" value="<?php echo get_option('grconnect_secret'); ?>" class="form-control" .>
						</div>
					</div>
                    <div class="form-group">
						<label class="control-label col-sm-5" for="grconnect_point">Points</label>
						<div class="col-sm-7 points">
							<div style="float: left;">
								<div style="overflow: hidden;">
									<span style="float: left; padding-top: 5px;">For every 
										<span class="asterisk">*</span>
									</span>
									<input type="text" style="float: left; margin: 0px 10px; width: 60px;" name="grconnect_price" id="grconnect_price" value="<?php echo get_option('grconnect_price'); ?>" maxlength="10" class="form-control">
										<span style="float: left; padding-top: 5px;">purchase, reward 
											<span class="asterisk">*</span>
										</span>
								</div>
							</div>
							<div style="float: left; margin: 0 0 10px 10px;">
								<div style="overflow: hidden;">
									<input type="text" style="float: left; margin-right: 10px; width: 60px;" name="grconnect_point" id="grconnect_point" value="<?php echo get_option('grconnect_point'); ?>" maxlength="10" class="form-control">
										<span style="float: left; padding-top: 5px;">point(s)</span>
									</div>
							</div>
							<p style="background: #f2f2f2 none repeat scroll 0 0;    border: 1px solid #000;    box-shadow: 0 6px 10px #ccc;    clear: both;    font-size: 14px;    margin: 12px 0;    padding: 15px;">						Example: For every 
							<b style="border: 1px solid rgb(0, 0, 0); padding: 0px 2px;">2</b> purchase, reward 
							<b style="border: 1px solid rgb(0, 0, 0); padding: 0px 2px;">1</b> point(s)
							<br>						This would mean as follows:
								<br>						If your currency is setup as 
									<b>US$</b> then
									<br>						For every 
										<b>$2</b> of purchase your customer will be rewarded 
										<b>1</b> point.					
							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5" for="grconnect_min_order">Minimum Order Value 					
							<button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default helpNote" type="button" data-original-title="By default a customer earns points from orders regardless of the order value (tax, shipping, discount and handling excluded).">?</button>
						</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="grconnect_min_order" id="grconnect_min_order" value="<?php echo get_option('grconnect_min_order'); ?>"/>
								<small>Leave this field blank, if you do not want to activate a minimum order value</small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5" for="grconnect_wel_bonus">Welcome Bonus					
							<button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default helpNote" type="button" data-original-title="If enabled, a one-time Welcome bonus is given to all new store accounts eligible for the loyalty program">?</button>
						</label>
						<div class="col-sm-4" style="margin-top: 10px;">
							<input type="radio" name="grconnect_wel_bonus_chk" value="1" style="margin-top: 0;" />ON
							<input type="radio" name="grconnect_wel_bonus_chk" value="0" style="margin-top: 0;" />OFF
						</div>
					</div>
					<div class="form-group">
						<label  class="control-label col-sm-5" >Enter Welcome Points</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="grconnect_wel_bonus" id="grconnect_wel_bonus" value="<?php echo get_option('grconnect_wel_bonus'); ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-5 col-sm-4">
							<?php @submit_button(); ?>
						</div>
					</div>
			
		</form>
	</div>
	<footer class="footText">
	<div class="pull-left">
		<a href="http://appsmav.com" class="gratifiLogo" target="_blank">Gratisfaction</a>
	</div>
	<div class="pull-right">
		<a href="http://appsmav.com" target="_blank">
			<img src="https://appsmav.com/gr/assets/img/bg_logo_foot.jpg">
			</a>
		</div>
	</footer>
</div>
<link href="<?=plugin_dir_url( __FILE__ )?>../css/bootstrap-3.2.0.min.css" rel="stylesheet"/>
<script src="<?=plugin_dir_url( __FILE__ )?>../js/bootstrap.min.js"></script>
<script type="text/javascript">	
	jQuery(document).ready(function(){		
		var grconnect_wel_bonus_chk	=	'<?php echo get_option('grconnect_wel_bonus_chk'); ?>';	
		if(	grconnect_wel_bonus_chk == '1'){	
			jQuery('#grconnect_wel_bonus').attr('disabled', false);	
			jQuery('input[name="grconnect_wel_bonus_chk"][value="1"]').attr('checked', 'checked');	
		}else{
			jQuery('#grconnect_wel_bonus').attr('disabled', 'disabled');	
			jQuery('input[name="grconnect_wel_bonus_chk"][value="0"]').attr('checked', 'checked');		
		}				
		
		jQuery('input[name=grconnect_wel_bonus_chk]').on('click',function(){	
			var grconnect_wel_bonus_chk	=	jQuery(this).val();	
			if(	grconnect_wel_bonus_chk == 1)			
			{				
				jQuery('#grconnect_wel_bonus').attr('disabled', false);	
			}
			else
			{	
				jQuery('#grconnect_wel_bonus').attr('disabled', 'disabled');		
			}		
		});	
		
		jQuery('body').tooltip({selector: '[data-toggle=tooltip]'}); 
	});
</script>