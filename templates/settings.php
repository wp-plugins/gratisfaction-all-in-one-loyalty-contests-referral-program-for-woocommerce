
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
    margin-bottom: 0;
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
	padding-bottom:0;
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
    margin: 0 5%;
    padding: 50px;
    text-align: center;
    width: 90% !important;
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
.nav-tabs {
    margin-bottom: 20px !important;
}

@media screen and (max-width: 640px) {
    .wrap {
		margin: 20px 10px 0 0;
	}
	.wrap h2 {
		color: #fff;
	}
	.logoAppsMav {
		box-shadow: none;
		display: block;
		margin-bottom: 20px;
		margin-right: 0;
		vertical-align: middle;
	}
	.logoAppsMav > img {
		box-shadow: 0 0 15px #777;
	}
	.media-upload-form div.error, .notice, .wrap div.error, .wrap div.updated {
		margin: 10px 0;
	}
	.ConnectBlock {
		width: 98%;
		padding: 5%;
	}
	.form-horizontal .control-label {
		display: block;
		margin-bottom: 0;
		padding: 5% 15px;
		text-align: left;
	}
	p.submit {
		margin: 0;
		padding: 10px 0 0 0;
	}
	#wpbody-content {
		padding-bottom: 0;
	}
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
				
				<p>Gratisfaction is a very powerful application, which will help you increase engagement, traffic, leads &amp; sales. We would love to see your business grow through our applications.</p>
				
				<p>If you face any problem installing this app, simply email to <a href="mailto:sales@appsmav.com">sales@appsmav.com</a></p>
											
				<p>Our team will work with you to correctly install &amp; configure Gratisfaction.</p>				
				<p>All the best<br>Team Apps Mav</p>			
			</div>
		
		<!-- Form for setting ends form here -->	
			<?php 
				$grRegisterAr	=	get_option('grconnect_register',0);
				$displaySettingBlock	=	($grRegisterAr	==	1)?"block":"none";
				$displayRegisterBlock	=	($grRegisterAr	==	1)?"none":"block";
			?>
            <div class="ConnectBlock" id="settingBlock" style="display:<?=$displaySettingBlock?>">
                <form class="formGr form-horizontal" method="post" action="options.php" id="settingForm">
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
							<div>
								For every <span class="asterisk">*</span>
								<input type="text" style="display: inline-block; margin: 10px ; width: 60px;" name="grconnect_price" id="grconnect_price" value="<?php echo get_option('grconnect_price'); ?>" maxlength="10" class="form-control">
								purchase, reward  <span class="asterisk">*</span>
								<input type="text" style="display: inline-block; margin: 10px ; width: 60px;" name="grconnect_point" id="grconnect_point" value="<?php echo get_option('grconnect_point'); ?>" maxlength="10" class="form-control">
								point(s)
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
						<div class="col-sm-4" style="margin-top: 6px;">
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
							<p class="submit">
								<input type="button" value="Save Changes" class="button button-primary" id="submitform" name="submitform" onclick="callSaveForm();">
							</p>							
						</div>
					</div>
					</form>
			</div>
	
	<!-- Form for setting ends here -->
	
	<!-- Form for registeration Starts here -->
	<div class="ConnectBlock" id="registerBlock" style="display:<?=$displayRegisterBlock?>">
	 <form class="formGr form-horizontal" method="post" action="#" id="registerForm">
		<input type="hidden" name="action" value="create_account" />
		<?php $current_user = wp_get_current_user();?>
			<div class="form-group">
				<label for="grconnect_reg_email" class="col-sm-5 control-label">Email <span class="asterisk">*</span></label>
				<div class="col-sm-4">
					<input type="text" name="grconnect_reg_email" id="grconnect_reg_email" value="<?php echo get_bloginfo('admin_email'); ?>" maxlength="250" class="form-control /">
					</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_firstname" class="control-label col-sm-5">First Name <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_firstname" maxlength="100" id="grconnect_reg_firstname" value="<?php echo $current_user->user_firstname; ?>" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_lastname" class="control-label col-sm-5">Last Name <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_lastname" maxlength="100" id="grconnect_reg_lastname" value="<?php echo $current_user->user_lastname; ?>" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_companyname" class="control-label col-sm-5">Company Name  <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_companyname" maxlength="100" id="grconnect_reg_companyname" value="<?php echo get_bloginfo('name'); ?>" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_currency" class="control-label col-sm-5">Currency <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<select id="grconnect_reg_currency" name="grconnect_reg_currency"><option value="3">AUD</option><option value="5">EUR</option><option value="4">GBP</option><option value="6">INR</option><option selected="" value="1">USD</option></select>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_address1" class="control-label col-sm-5">Address <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_address1" maxlength="200" id="grconnect_reg_address1" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_city" class="control-label col-sm-5">City <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_city" maxlength="100" id="grconnect_reg_city" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_state" class="control-label col-sm-5">State / Region <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_state" maxlength="50" id="grconnect_reg_state" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_country" class="control-label col-sm-5">Country <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<select id="country" name="grconnect_reg_country"><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option selected="selected" value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, Democratic Republic</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island &amp; Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_postcode" class="control-label col-sm-5">Zip / Post code <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_postcode" maxlength="10" id="grconnect_reg_postcode" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_phonenumber" class="control-label col-sm-5">Phone	 <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_phonenumber" maxlength="12" id="grconnect_reg_phonenumber" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_campaign_name" class="control-label col-sm-5">Campaign Name	 <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<input type="text" name="grconnect_reg_campaign_name" maxlength="100" id="grconnect_reg_campaign_name" value="" class="form-control" .>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_timezone" class="control-label col-sm-5">Timezone	 <span class="asterisk">*</span></label>
			<div class="col-sm-4">
				<select class="form-control" id="grconnect_reg_timezone" name="grconnect_reg_timezone">     
                        <option value="Africa/Abidjan">Africa/Abidjan</option><option value="Africa/Accra">Africa/Accra</option><option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option><option value="Africa/Algiers">Africa/Algiers</option><option value="Africa/Asmara">Africa/Asmara</option><option value="Africa/Bamako">Africa/Bamako</option><option value="Africa/Bangui">Africa/Bangui</option><option value="Africa/Banjul">Africa/Banjul</option><option value="Africa/Bissau">Africa/Bissau</option><option value="Africa/Blantyre">Africa/Blantyre</option><option value="Africa/Brazzaville">Africa/Brazzaville</option><option value="Africa/Bujumbura">Africa/Bujumbura</option><option value="Africa/Cairo">Africa/Cairo</option><option value="Africa/Casablanca">Africa/Casablanca</option><option value="Africa/Ceuta">Africa/Ceuta</option><option value="Africa/Conakry">Africa/Conakry</option><option value="Africa/Dakar">Africa/Dakar</option><option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option><option value="Africa/Djibouti">Africa/Djibouti</option><option value="Africa/Douala">Africa/Douala</option><option value="Africa/El_Aaiun">Africa/El_Aaiun</option><option value="Africa/Freetown">Africa/Freetown</option><option value="Africa/Gaborone">Africa/Gaborone</option><option value="Africa/Harare">Africa/Harare</option><option value="Africa/Johannesburg">Africa/Johannesburg</option><option value="Africa/Juba">Africa/Juba</option><option value="Africa/Kampala">Africa/Kampala</option><option value="Africa/Khartoum">Africa/Khartoum</option><option value="Africa/Kigali">Africa/Kigali</option><option value="Africa/Kinshasa">Africa/Kinshasa</option><option value="Africa/Lagos">Africa/Lagos</option><option value="Africa/Libreville">Africa/Libreville</option><option value="Africa/Lome">Africa/Lome</option><option value="Africa/Luanda">Africa/Luanda</option><option value="Africa/Lubumbashi">Africa/Lubumbashi</option><option value="Africa/Lusaka">Africa/Lusaka</option><option value="Africa/Malabo">Africa/Malabo</option><option value="Africa/Maputo">Africa/Maputo</option><option value="Africa/Maseru">Africa/Maseru</option><option value="Africa/Mbabane">Africa/Mbabane</option><option value="Africa/Mogadishu">Africa/Mogadishu</option><option value="Africa/Monrovia">Africa/Monrovia</option><option value="Africa/Nairobi">Africa/Nairobi</option><option value="Africa/Ndjamena">Africa/Ndjamena</option><option value="Africa/Niamey">Africa/Niamey</option><option value="Africa/Nouakchott">Africa/Nouakchott</option><option value="Africa/Ouagadougou">Africa/Ouagadougou</option><option value="Africa/Porto-Novo">Africa/Porto-Novo</option><option value="Africa/Sao_Tome">Africa/Sao_Tome</option><option value="Africa/Tripoli">Africa/Tripoli</option><option value="Africa/Tunis">Africa/Tunis</option><option value="Africa/Windhoek">Africa/Windhoek</option><option value="America/Adak">America/Adak</option><option value="America/Anchorage">America/Anchorage</option><option value="America/Anguilla">America/Anguilla</option><option value="America/Antigua">America/Antigua</option><option value="America/Araguaina">America/Araguaina</option><option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option><option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option><option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option><option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option><option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option><option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option><option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option><option value="America/Argentina/Salta">America/Argentina/Salta</option><option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option><option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option><option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option><option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option><option value="America/Aruba">America/Aruba</option><option value="America/Asuncion">America/Asuncion</option><option value="America/Atikokan">America/Atikokan</option><option value="America/Bahia">America/Bahia</option><option value="America/Bahia_Banderas">America/Bahia_Banderas</option><option value="America/Barbados">America/Barbados</option><option value="America/Belem">America/Belem</option><option value="America/Belize">America/Belize</option><option value="America/Blanc-Sablon">America/Blanc-Sablon</option><option value="America/Boa_Vista">America/Boa_Vista</option><option value="America/Bogota">America/Bogota</option><option value="America/Boise">America/Boise</option><option value="America/Cambridge_Bay">America/Cambridge_Bay</option><option value="America/Campo_Grande">America/Campo_Grande</option><option value="America/Cancun">America/Cancun</option><option value="America/Caracas">America/Caracas</option><option value="America/Cayenne">America/Cayenne</option><option value="America/Cayman">America/Cayman</option><option selected="selected" value="America/Chicago">America/Chicago</option><option value="America/Chihuahua">America/Chihuahua</option><option value="America/Costa_Rica">America/Costa_Rica</option><option value="America/Creston">America/Creston</option><option value="America/Cuiaba">America/Cuiaba</option><option value="America/Curacao">America/Curacao</option><option value="America/Danmarkshavn">America/Danmarkshavn</option><option value="America/Dawson">America/Dawson</option><option value="America/Dawson_Creek">America/Dawson_Creek</option><option value="America/Denver">America/Denver</option><option value="America/Detroit">America/Detroit</option><option value="America/Dominica">America/Dominica</option><option value="America/Edmonton">America/Edmonton</option><option value="America/Eirunepe">America/Eirunepe</option><option value="America/El_Salvador">America/El_Salvador</option><option value="America/Fortaleza">America/Fortaleza</option><option value="America/Glace_Bay">America/Glace_Bay</option><option value="America/Godthab">America/Godthab</option><option value="America/Goose_Bay">America/Goose_Bay</option><option value="America/Grand_Turk">America/Grand_Turk</option><option value="America/Grenada">America/Grenada</option><option value="America/Guadeloupe">America/Guadeloupe</option><option value="America/Guatemala">America/Guatemala</option><option value="America/Guayaquil">America/Guayaquil</option><option value="America/Guyana">America/Guyana</option><option value="America/Halifax">America/Halifax</option><option value="America/Havana">America/Havana</option><option value="America/Hermosillo">America/Hermosillo</option><option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option><option value="America/Indiana/Knox">America/Indiana/Knox</option><option value="America/Indiana/Marengo">America/Indiana/Marengo</option><option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option><option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option><option value="America/Indiana/Vevay">America/Indiana/Vevay</option><option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option><option value="America/Indiana/Winamac">America/Indiana/Winamac</option><option value="America/Inuvik">America/Inuvik</option><option value="America/Iqaluit">America/Iqaluit</option><option value="America/Jamaica">America/Jamaica</option><option value="America/Juneau">America/Juneau</option><option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option><option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option><option value="America/Kralendijk">America/Kralendijk</option><option value="America/La_Paz">America/La_Paz</option><option value="America/Lima">America/Lima</option><option value="America/Los_Angeles">America/Los_Angeles</option><option value="America/Lower_Princes">America/Lower_Princes</option><option value="America/Maceio">America/Maceio</option><option value="America/Managua">America/Managua</option><option value="America/Manaus">America/Manaus</option><option value="America/Marigot">America/Marigot</option><option value="America/Martinique">America/Martinique</option><option value="America/Matamoros">America/Matamoros</option><option value="America/Mazatlan">America/Mazatlan</option><option value="America/Menominee">America/Menominee</option><option value="America/Merida">America/Merida</option><option value="America/Metlakatla">America/Metlakatla</option><option value="America/Mexico_City">America/Mexico_City</option><option value="America/Miquelon">America/Miquelon</option><option value="America/Moncton">America/Moncton</option><option value="America/Monterrey">America/Monterrey</option><option value="America/Montevideo">America/Montevideo</option><option value="America/Montserrat">America/Montserrat</option><option value="America/Nassau">America/Nassau</option><option value="America/New_York">America/New_York</option><option value="America/Nipigon">America/Nipigon</option><option value="America/Nome">America/Nome</option><option value="America/Noronha">America/Noronha</option><option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option><option value="America/North_Dakota/Center">America/North_Dakota/Center</option><option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option><option value="America/Ojinaga">America/Ojinaga</option><option value="America/Panama">America/Panama</option><option value="America/Pangnirtung">America/Pangnirtung</option><option value="America/Paramaribo">America/Paramaribo</option><option value="America/Phoenix">America/Phoenix</option><option value="America/Port-au-Prince">America/Port-au-Prince</option><option value="America/Port_of_Spain">America/Port_of_Spain</option><option value="America/Porto_Velho">America/Porto_Velho</option><option value="America/Puerto_Rico">America/Puerto_Rico</option><option value="America/Rainy_River">America/Rainy_River</option><option value="America/Rankin_Inlet">America/Rankin_Inlet</option><option value="America/Recife">America/Recife</option><option value="America/Regina">America/Regina</option><option value="America/Resolute">America/Resolute</option><option value="America/Rio_Branco">America/Rio_Branco</option><option value="America/Santa_Isabel">America/Santa_Isabel</option><option value="America/Santarem">America/Santarem</option><option value="America/Santiago">America/Santiago</option><option value="America/Santo_Domingo">America/Santo_Domingo</option><option value="America/Sao_Paulo">America/Sao_Paulo</option><option value="America/Scoresbysund">America/Scoresbysund</option><option value="America/Sitka">America/Sitka</option><option value="America/St_Barthelemy">America/St_Barthelemy</option><option value="America/St_Johns">America/St_Johns</option><option value="America/St_Kitts">America/St_Kitts</option><option value="America/St_Lucia">America/St_Lucia</option><option value="America/St_Thomas">America/St_Thomas</option><option value="America/St_Vincent">America/St_Vincent</option><option value="America/Swift_Current">America/Swift_Current</option><option value="America/Tegucigalpa">America/Tegucigalpa</option><option value="America/Thule">America/Thule</option><option value="America/Thunder_Bay">America/Thunder_Bay</option><option value="America/Tijuana">America/Tijuana</option><option value="America/Toronto">America/Toronto</option><option value="America/Tortola">America/Tortola</option><option value="America/Vancouver">America/Vancouver</option><option value="America/Whitehorse">America/Whitehorse</option><option value="America/Winnipeg">America/Winnipeg</option><option value="America/Yakutat">America/Yakutat</option><option value="America/Yellowknife">America/Yellowknife</option><option value="Antarctica/Casey">Antarctica/Casey</option><option value="Antarctica/Davis">Antarctica/Davis</option><option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option><option value="Antarctica/Macquarie">Antarctica/Macquarie</option><option value="Antarctica/Mawson">Antarctica/Mawson</option><option value="Antarctica/McMurdo">Antarctica/McMurdo</option><option value="Antarctica/Palmer">Antarctica/Palmer</option><option value="Antarctica/Rothera">Antarctica/Rothera</option><option value="Antarctica/Syowa">Antarctica/Syowa</option><option value="Antarctica/Troll">Antarctica/Troll</option><option value="Antarctica/Vostok">Antarctica/Vostok</option><option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option><option value="Asia/Aden">Asia/Aden</option><option value="Asia/Almaty">Asia/Almaty</option><option value="Asia/Amman">Asia/Amman</option><option value="Asia/Anadyr">Asia/Anadyr</option><option value="Asia/Aqtau">Asia/Aqtau</option><option value="Asia/Aqtobe">Asia/Aqtobe</option><option value="Asia/Ashgabat">Asia/Ashgabat</option><option value="Asia/Baghdad">Asia/Baghdad</option><option value="Asia/Bahrain">Asia/Bahrain</option><option value="Asia/Baku">Asia/Baku</option><option value="Asia/Bangkok">Asia/Bangkok</option><option value="Asia/Beirut">Asia/Beirut</option><option value="Asia/Bishkek">Asia/Bishkek</option><option value="Asia/Brunei">Asia/Brunei</option><option value="Asia/Choibalsan">Asia/Choibalsan</option><option value="Asia/Chongqing">Asia/Chongqing</option><option value="Asia/Colombo">Asia/Colombo</option><option value="Asia/Damascus">Asia/Damascus</option><option value="Asia/Dhaka">Asia/Dhaka</option><option value="Asia/Dili">Asia/Dili</option><option value="Asia/Dubai">Asia/Dubai</option><option value="Asia/Dushanbe">Asia/Dushanbe</option><option value="Asia/Gaza">Asia/Gaza</option><option value="Asia/Harbin">Asia/Harbin</option><option value="Asia/Hebron">Asia/Hebron</option><option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option><option value="Asia/Hong_Kong">Asia/Hong_Kong</option><option value="Asia/Hovd">Asia/Hovd</option><option value="Asia/Irkutsk">Asia/Irkutsk</option><option value="Asia/Jakarta">Asia/Jakarta</option><option value="Asia/Jayapura">Asia/Jayapura</option><option value="Asia/Jerusalem">Asia/Jerusalem</option><option value="Asia/Kabul">Asia/Kabul</option><option value="Asia/Kamchatka">Asia/Kamchatka</option><option value="Asia/Karachi">Asia/Karachi</option><option value="Asia/Kashgar">Asia/Kashgar</option><option value="Asia/Kathmandu">Asia/Kathmandu</option><option value="Asia/Khandyga">Asia/Khandyga</option><option value="Asia/Kolkata">Asia/Kolkata</option><option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option><option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option><option value="Asia/Kuching">Asia/Kuching</option><option value="Asia/Kuwait">Asia/Kuwait</option><option value="Asia/Macau">Asia/Macau</option><option value="Asia/Magadan">Asia/Magadan</option><option value="Asia/Makassar">Asia/Makassar</option><option value="Asia/Manila">Asia/Manila</option><option value="Asia/Muscat">Asia/Muscat</option><option value="Asia/Nicosia">Asia/Nicosia</option><option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option><option value="Asia/Novosibirsk">Asia/Novosibirsk</option><option value="Asia/Omsk">Asia/Omsk</option><option value="Asia/Oral">Asia/Oral</option><option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option><option value="Asia/Pontianak">Asia/Pontianak</option><option value="Asia/Pyongyang">Asia/Pyongyang</option><option value="Asia/Qatar">Asia/Qatar</option><option value="Asia/Qyzylorda">Asia/Qyzylorda</option><option value="Asia/Rangoon">Asia/Rangoon</option><option value="Asia/Riyadh">Asia/Riyadh</option><option value="Asia/Sakhalin">Asia/Sakhalin</option><option value="Asia/Samarkand">Asia/Samarkand</option><option value="Asia/Seoul">Asia/Seoul</option><option value="Asia/Shanghai">Asia/Shanghai</option><option value="Asia/Singapore">Asia/Singapore</option><option value="Asia/Taipei">Asia/Taipei</option><option value="Asia/Tashkent">Asia/Tashkent</option><option value="Asia/Tbilisi">Asia/Tbilisi</option><option value="Asia/Tehran">Asia/Tehran</option><option value="Asia/Thimphu">Asia/Thimphu</option><option value="Asia/Tokyo">Asia/Tokyo</option><option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option><option value="Asia/Urumqi">Asia/Urumqi</option><option value="Asia/Ust-Nera">Asia/Ust-Nera</option><option value="Asia/Vientiane">Asia/Vientiane</option><option value="Asia/Vladivostok">Asia/Vladivostok</option><option value="Asia/Yakutsk">Asia/Yakutsk</option><option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option><option value="Asia/Yerevan">Asia/Yerevan</option><option value="Atlantic/Azores">Atlantic/Azores</option><option value="Atlantic/Bermuda">Atlantic/Bermuda</option><option value="Atlantic/Canary">Atlantic/Canary</option><option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option><option value="Atlantic/Faroe">Atlantic/Faroe</option><option value="Atlantic/Madeira">Atlantic/Madeira</option><option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option><option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option><option value="Atlantic/St_Helena">Atlantic/St_Helena</option><option value="Atlantic/Stanley">Atlantic/Stanley</option><option value="Australia/Adelaide">Australia/Adelaide</option><option value="Australia/Brisbane">Australia/Brisbane</option><option value="Australia/Broken_Hill">Australia/Broken_Hill</option><option value="Australia/Currie">Australia/Currie</option><option value="Australia/Darwin">Australia/Darwin</option><option value="Australia/Eucla">Australia/Eucla</option><option value="Australia/Hobart">Australia/Hobart</option><option value="Australia/Lindeman">Australia/Lindeman</option><option value="Australia/Lord_Howe">Australia/Lord_Howe</option><option value="Australia/Melbourne">Australia/Melbourne</option><option value="Australia/Perth">Australia/Perth</option><option value="Australia/Sydney">Australia/Sydney</option><option value="Europe/Amsterdam">Europe/Amsterdam</option><option value="Europe/Andorra">Europe/Andorra</option><option value="Europe/Athens">Europe/Athens</option><option value="Europe/Belgrade">Europe/Belgrade</option><option value="Europe/Berlin">Europe/Berlin</option><option value="Europe/Bratislava">Europe/Bratislava</option><option value="Europe/Brussels">Europe/Brussels</option><option value="Europe/Bucharest">Europe/Bucharest</option><option value="Europe/Budapest">Europe/Budapest</option><option value="Europe/Busingen">Europe/Busingen</option><option value="Europe/Chisinau">Europe/Chisinau</option><option value="Europe/Copenhagen">Europe/Copenhagen</option><option value="Europe/Dublin">Europe/Dublin</option><option value="Europe/Gibraltar">Europe/Gibraltar</option><option value="Europe/Guernsey">Europe/Guernsey</option><option value="Europe/Helsinki">Europe/Helsinki</option><option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option><option value="Europe/Istanbul">Europe/Istanbul</option><option value="Europe/Jersey">Europe/Jersey</option><option value="Europe/Kaliningrad">Europe/Kaliningrad</option><option value="Europe/Kiev">Europe/Kiev</option><option value="Europe/Lisbon">Europe/Lisbon</option><option value="Europe/Ljubljana">Europe/Ljubljana</option><option value="Europe/London">Europe/London</option><option value="Europe/Luxembourg">Europe/Luxembourg</option><option value="Europe/Madrid">Europe/Madrid</option><option value="Europe/Malta">Europe/Malta</option><option value="Europe/Mariehamn">Europe/Mariehamn</option><option value="Europe/Minsk">Europe/Minsk</option><option value="Europe/Monaco">Europe/Monaco</option><option value="Europe/Moscow">Europe/Moscow</option><option value="Europe/Oslo">Europe/Oslo</option><option value="Europe/Paris">Europe/Paris</option><option value="Europe/Podgorica">Europe/Podgorica</option><option value="Europe/Prague">Europe/Prague</option><option value="Europe/Riga">Europe/Riga</option><option value="Europe/Rome">Europe/Rome</option><option value="Europe/Samara">Europe/Samara</option><option value="Europe/San_Marino">Europe/San_Marino</option><option value="Europe/Sarajevo">Europe/Sarajevo</option><option value="Europe/Simferopol">Europe/Simferopol</option><option value="Europe/Skopje">Europe/Skopje</option><option value="Europe/Sofia">Europe/Sofia</option><option value="Europe/Stockholm">Europe/Stockholm</option><option value="Europe/Tallinn">Europe/Tallinn</option><option value="Europe/Tirane">Europe/Tirane</option><option value="Europe/Uzhgorod">Europe/Uzhgorod</option><option value="Europe/Vaduz">Europe/Vaduz</option><option value="Europe/Vatican">Europe/Vatican</option><option value="Europe/Vienna">Europe/Vienna</option><option value="Europe/Vilnius">Europe/Vilnius</option><option value="Europe/Volgograd">Europe/Volgograd</option><option value="Europe/Warsaw">Europe/Warsaw</option><option value="Europe/Zagreb">Europe/Zagreb</option><option value="Europe/Zaporozhye">Europe/Zaporozhye</option><option value="Europe/Zurich">Europe/Zurich</option><option value="Indian/Antananarivo">Indian/Antananarivo</option><option value="Indian/Chagos">Indian/Chagos</option><option value="Indian/Christmas">Indian/Christmas</option><option value="Indian/Cocos">Indian/Cocos</option><option value="Indian/Comoro">Indian/Comoro</option><option value="Indian/Kerguelen">Indian/Kerguelen</option><option value="Indian/Mahe">Indian/Mahe</option><option value="Indian/Maldives">Indian/Maldives</option><option value="Indian/Mauritius">Indian/Mauritius</option><option value="Indian/Mayotte">Indian/Mayotte</option><option value="Indian/Reunion">Indian/Reunion</option><option value="Pacific/Apia">Pacific/Apia</option><option value="Pacific/Auckland">Pacific/Auckland</option><option value="Pacific/Chatham">Pacific/Chatham</option><option value="Pacific/Chuuk">Pacific/Chuuk</option><option value="Pacific/Easter">Pacific/Easter</option><option value="Pacific/Efate">Pacific/Efate</option><option value="Pacific/Enderbury">Pacific/Enderbury</option><option value="Pacific/Fakaofo">Pacific/Fakaofo</option><option value="Pacific/Fiji">Pacific/Fiji</option><option value="Pacific/Funafuti">Pacific/Funafuti</option><option value="Pacific/Galapagos">Pacific/Galapagos</option><option value="Pacific/Gambier">Pacific/Gambier</option><option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option><option value="Pacific/Guam">Pacific/Guam</option><option value="Pacific/Honolulu">Pacific/Honolulu</option><option value="Pacific/Johnston">Pacific/Johnston</option><option value="Pacific/Kiritimati">Pacific/Kiritimati</option><option value="Pacific/Kosrae">Pacific/Kosrae</option><option value="Pacific/Kwajalein">Pacific/Kwajalein</option><option value="Pacific/Majuro">Pacific/Majuro</option><option value="Pacific/Marquesas">Pacific/Marquesas</option><option value="Pacific/Midway">Pacific/Midway</option><option value="Pacific/Nauru">Pacific/Nauru</option><option value="Pacific/Niue">Pacific/Niue</option><option value="Pacific/Norfolk">Pacific/Norfolk</option><option value="Pacific/Noumea">Pacific/Noumea</option><option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option><option value="Pacific/Palau">Pacific/Palau</option><option value="Pacific/Pitcairn">Pacific/Pitcairn</option><option value="Pacific/Pohnpei">Pacific/Pohnpei</option><option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option><option value="Pacific/Rarotonga">Pacific/Rarotonga</option><option value="Pacific/Saipan">Pacific/Saipan</option><option value="Pacific/Tahiti">Pacific/Tahiti</option><option value="Pacific/Tarawa">Pacific/Tarawa</option><option value="Pacific/Tongatapu">Pacific/Tongatapu</option><option value="Pacific/Wake">Pacific/Wake</option><option value="Pacific/Wallis">Pacific/Wallis</option>                       
                    </select>
				</div>
			</div>
			<div class="form-group">
				<label for="grconnect_reg_date_format" class="control-label col-sm-5">Date Format	 <span class="asterisk">*</span></label>
			<div class="col-sm-4">
					<select class="form-control" name="grconnect_reg_date_format" id="grconnect_reg_date_format">     
                        <option selected="" value="m/d/Y">MM/DD/YYYY</option>
						<option value="d/m/Y">DD/MM/YYYY</option>                       
                    </select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-5" for="grconnect_reg_exclusion_period">Exclusion Period for Redemption (in days)  					
					<button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default helpNote" type="button" data-original-title="Points earned will not be redeemable within this exclusion period. This is useful to avoid points being redeemed before your customer activates a refund.">?</button>
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="grconnect_reg_exclusion_period" id="grconnect_reg_exclusion_period" value="0" maxlength="5" />
					
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-5 col-sm-4">
					<input type="button" id="createButton" value="Create" onclick="callRegister();" class="button button-primary" />
				</div>
			</div>
		</form>
	</div>
	
	<!-- Form for registeration ends here -->
	
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
		function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  return emailReg.test( $email );
	}

	function callRegister(){
		
		if(jQuery.trim(jQuery('#grconnect_reg_email').val()).length	==	0){
			alert('Please add email');
			return false;
		}
		
		if( !validateEmail(jQuery('#grconnect_reg_email').val())) { 
			alert('Please add proper format email');
			return false;
		}
		
		if(jQuery.trim(jQuery('#grconnect_reg_firstname').val()).length	==	0){
			alert('Please add first name');
			return false;
		}
			
		if(jQuery.trim(jQuery('#grconnect_reg_lastname').val()).length	==	0){
			alert('Please add last name');
			return false;
		}
			
		if(jQuery.trim(jQuery('#grconnect_reg_companyname').val()).length	==	0){
			alert('Please add company name');
			return false;
		}
		
		if(jQuery.trim(jQuery('#grconnect_reg_address1').val()).length	==	0){
			alert('Please add Address');
			return false;
		}
		
		if(jQuery.trim(jQuery('#grconnect_reg_city').val()).length	==	0){
			alert('Please add City');
			return false;
		}
		if(jQuery.trim(jQuery('#grconnect_reg_state').val()).length	==	0){
			alert('Please add State');
			return false;
		}
		if(jQuery.trim(jQuery('#grconnect_reg_postcode').val()).length	==	0){
			alert('Please add postcode / zip');
			return false;
		}
		if(jQuery.trim(jQuery('#grconnect_reg_phonenumber').val()).length	==	0){
			alert('Please add phone');
			return false;
		}
		if(jQuery.trim(jQuery('#grconnect_reg_campaign_name').val()).length	==	0){
			alert('Please add campaign name');
			return false;
		}
		if(jQuery.trim(jQuery('#grconnect_reg_exclusion_period').val()).length	==	0){
			alert('Please add exclusion period');
			return false;
		}else if( isNaN(jQuery('#grconnect_reg_exclusion_period').val())){
			alert('Please enter the exclusion period in days');
			return false
		}else if( jQuery('#grconnect_reg_exclusion_period').val() > 60){
			alert('Please enter the exclusion period lesser than 61 days');
			return false
		}
		
			
		jQuery('#createButton').val('Creating..');
		jQuery('#createButton').attr('disabled','disabled');
		
		
		jQuery.post(
			ajaxurl, 			
				jQuery('#registerForm').serialize()
			, 
			function(response){
				
				if(response.error	==	0)
				{
					jQuery('#grconnect_appid').val(response.appid);
					jQuery('#grconnect_secret').val(response.secret);
					jQuery('#settingBlock').show('slow');
					jQuery('#registerBlock').hide();
				}else{
					alert('The server responded: ' + response.msg);
					jquery('#createButton').removeAttr('disabled');
				}
			},'json'
		);	
	}
	
	function callSaveForm(){
		//alert(jQuery('input[name="grconnect_wel_bonus_chk"][value="1"]').attr('checked'));
		if(jQuery('input[name="grconnect_wel_bonus_chk"][value="1"]').attr('checked')	==	'checked' ){
			
			if(jQuery.trim(jQuery('#grconnect_wel_bonus').val()).length	==	0){
				alert('Please add welcome bonus points');
				return false;
			}else if( isNaN(jQuery('#grconnect_wel_bonus').val())){
				alert('Please enter welcome bonus points numeric only');
				return false;
			}
		}
		
		jQuery('#settingForm').submit();
	}
	
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