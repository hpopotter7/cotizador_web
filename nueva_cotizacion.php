<?php
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Nueva cotización - Cotizador Web</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
	  <link rel="icon" href="assets/images/cart_icon2.png">
	 <!--alerts CSS -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"><!-- summernotes CSS -->
    <link href="assets/plugins/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <link href="assets/css/normalize.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/jquery.steps.css" rel="stylesheet">
    <!--<link href="assets/css/tootik.min.css" rel="stylesheet">-->
    <link href="assets/css/protip.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    
    
<!-- <link href="assets/css/estilos_tabs.css" rel="stylesheet"> -->

<style>@-webkit-keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@-webkit-keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@-webkit-keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@-webkit-keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@-webkit-keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@-webkit-keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@-webkit-keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

@keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
  flex-direction: column;
  align-items: stretch; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
    flex: 1;
    align-self: stretch;
    justify-content: flex-end;
    height: 2.2em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
    justify-content: center; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
    height: 2em;
    margin: .3125em auto;
    font-size: 1em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
    font-size: 1em; }

body.swal2-toast-shown > .swal2-container {
  position: fixed;
  background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-shown {
    background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-top {
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
    top: 0;
    right: 0;
    bottom: auto;
    left: auto; }
  body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
    top: 0;
    right: auto;
    bottom: auto;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
    top: auto;
    right: auto;
    bottom: 0;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-bottom {
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
    top: auto;
    right: 0;
    bottom: 0;
    left: auto; }

.swal2-popup.swal2-toast {
  flex-direction: row;
  align-items: center;
  width: auto;
  padding: 0.625em;
  box-shadow: 0 0 0.625em #d9d9d9;
  overflow-y: hidden; }
  .swal2-popup.swal2-toast .swal2-header {
    flex-direction: row; }
  .swal2-popup.swal2-toast .swal2-title {
    justify-content: flex-start;
    margin: 0 .6em;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-close {
    position: initial; }
  .swal2-popup.swal2-toast .swal2-content {
    justify-content: flex-start;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-icon {
    width: 2em;
    min-width: 2em;
    height: 2em;
    margin: 0; }
    .swal2-popup.swal2-toast .swal2-icon-text {
      font-size: 2em;
      font-weight: bold;
      line-height: 1em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: .875em;
      width: 1.375em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em; }
  .swal2-popup.swal2-toast .swal2-actions {
    height: auto;
    margin: 0 .3125em; }
  .swal2-popup.swal2-toast .swal2-styled {
    margin: 0 .3125em;
    padding: .3125em .625em;
    font-size: 1em; }
    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4); }
  .swal2-popup.swal2-toast .swal2-success {
    border-color: #a5dc86; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 2em;
      height: 2.8125em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
                transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
                transform-origin: 0 2em;
        border-radius: 0 4em 4em 0; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: .3125em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em; }
  .swal2-popup.swal2-toast.swal2-show {
    -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s; }
  .swal2-popup.swal2-toast.swal2-hide {
    -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
    -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
    -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s; }

@-webkit-keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@-webkit-keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@-webkit-keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@-webkit-keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

@keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
  overflow-y: hidden; }

body.swal2-height-auto {
  height: auto !important; }

body.swal2-no-backdrop .swal2-shown {
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
  background-color: transparent; }
  body.swal2-no-backdrop .swal2-shown > .swal2-modal {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
  body.swal2-no-backdrop .swal2-shown.swal2-top {
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
    top: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
    top: 0;
    right: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-center {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom {
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
    bottom: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
    right: 0;
    bottom: 0; }

.swal2-container {
  display: flex;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background-color: transparent;
  z-index: 1060;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch; }
  .swal2-container.swal2-top {
    align-items: flex-start; }
  .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
    align-items: flex-start;
    justify-content: flex-start; }
  .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
    align-items: flex-start;
    justify-content: flex-end; }
  .swal2-container.swal2-center {
    align-items: center; }
  .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
    align-items: center;
    justify-content: flex-start; }
  .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
    align-items: center;
    justify-content: flex-end; }
  .swal2-container.swal2-bottom {
    align-items: flex-end; }
  .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
    align-items: flex-end;
    justify-content: flex-start; }
  .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
    align-items: flex-end;
    justify-content: flex-end; }
  .swal2-container.swal2-grow-fullscreen > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-self: stretch;
    justify-content: center; }
  .swal2-container.swal2-grow-row > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-content: center;
    justify-content: center; }
  .swal2-container.swal2-grow-column {
    flex: 1;
    flex-direction: column; }
    .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
      align-items: center; }
    .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
      align-items: flex-start; }
    .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
      align-items: flex-end; }
    .swal2-container.swal2-grow-column > .swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center; }
  .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
    margin: auto; }
  @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .swal2-container .swal2-modal {
      margin: 0 !important; } }
  .swal2-container.swal2-fade {
    transition: background-color .1s; }
  .swal2-container.swal2-shown {
    background-color: rgba(0, 0, 0, 0.4); }

.swal2-popup {
  display: none;
  position: relative;
  flex-direction: column;
  justify-content: center;
  width: 32em;
  max-width: 100%;
  padding: 1.25em;
  border-radius: 0.3125em;
  background: #fff;
  font-family: inherit;
  font-size: 1rem;
  box-sizing: border-box; }
  .swal2-popup:focus {
    outline: none; }
  .swal2-popup.swal2-loading {
    overflow-y: hidden; }
  .swal2-popup .swal2-header {
    display: flex;
    flex-direction: column;
    align-items: center; }
  .swal2-popup .swal2-title {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 0 0.4em;
    padding: 0;
    color: #595959;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word; }
  .swal2-popup .swal2-actions {
    align-items: center;
    justify-content: center;
    margin: 1.25em auto 0; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)); }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      width: 2.5em;
      height: 2.5em;
      margin: .46875em;
      padding: 0;
      border: .25em solid transparent;
      border-radius: 100%;
      border-color: transparent;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      box-sizing: border-box;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none; }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px; }
    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-left: 5px;
      border: 3px solid #999999;
      border-radius: 50%;
      border-right-color: transparent;
      box-shadow: 1px 1px 1px #fff;
      content: '';
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal; }
  .swal2-popup .swal2-styled {
    margin: 0 .3125em;
    padding: .625em 2em;
    font-weight: 500;
    box-shadow: none; }
    .swal2-popup .swal2-styled:not([disabled]) {
      cursor: pointer; }
    .swal2-popup .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #aaa;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled:focus {
      outline: none;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4); }
    .swal2-popup .swal2-styled::-moz-focus-inner {
      border: 0; }
  .swal2-popup .swal2-footer {
    justify-content: center;
    margin: 1.25em 0 0;
    padding-top: 1em;
    border-top: 1px solid #eee;
    color: #545454;
    font-size: 1em; }
  .swal2-popup .swal2-image {
    max-width: 100%;
    margin: 1.25em auto; }
  .swal2-popup .swal2-close {
    position: absolute;
    top: 0;
    right: 0;
    justify-content: center;
    width: 1.2em;
    height: 1.2em;
    padding: 0;
    transition: color 0.1s ease-out;
    border: none;
    border-radius: 0;
    background: transparent;
    color: #cccccc;
    font-family: serif;
    font-size: 2.5em;
    line-height: 1.2;
    cursor: pointer;
    overflow: hidden; }
    .swal2-popup .swal2-close:hover {
      -webkit-transform: none;
              transform: none;
      color: #f27474; }
  .swal2-popup > .swal2-input,
  .swal2-popup > .swal2-file,
  .swal2-popup > .swal2-textarea,
  .swal2-popup > .swal2-select,
  .swal2-popup > .swal2-radio,
  .swal2-popup > .swal2-checkbox {
    display: none; }
  .swal2-popup .swal2-content {
    justify-content: center;
    margin: 0;
    padding: 0;
    color: #545454;
    font-size: 1.125em;
    font-weight: 300;
    line-height: normal;
    word-wrap: break-word; }
  .swal2-popup #swal2-content {
    text-align: center; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea,
  .swal2-popup .swal2-select,
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    margin: 1em auto; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea {
    width: 100%;
    transition: border-color .3s, box-shadow .3s;
    border: 1px solid #d9d9d9;
    border-radius: 0.1875em;
    font-size: 1.125em;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
    box-sizing: border-box; }
    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important; }
    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: none;
      box-shadow: 0 0 3px #c4e6f5; }
    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #cccccc; }
  .swal2-popup .swal2-range input {
    width: 80%; }
  .swal2-popup .swal2-range output {
    width: 20%;
    font-weight: 600;
    text-align: center; }
  .swal2-popup .swal2-range input,
  .swal2-popup .swal2-range output {
    height: 2.625em;
    margin: 1em auto;
    padding: 0;
    font-size: 1.125em;
    line-height: 2.625em; }
  .swal2-popup .swal2-input {
    height: 2.625em;
    padding: 0.75em; }
    .swal2-popup .swal2-input[type='number'] {
      max-width: 10em; }
  .swal2-popup .swal2-file {
    font-size: 1.125em; }
  .swal2-popup .swal2-textarea {
    height: 6.75em;
    padding: 0.75em; }
  .swal2-popup .swal2-select {
    min-width: 50%;
    max-width: 100%;
    padding: .375em .625em;
    color: #545454;
    font-size: 1.125em; }
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    align-items: center;
    justify-content: center; }
    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
      margin: 0 .6em;
      font-size: 1.125em; }
    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
      margin: 0 .4em; }
  .swal2-popup .swal2-validationerror {
    display: none;
    align-items: center;
    justify-content: center;
    padding: 0.625em;
    background: #f0f0f0;
    color: #666666;
    font-size: 1em;
    font-weight: 300;
    overflow: hidden; }
    .swal2-popup .swal2-validationerror::before {
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center;
      content: '!';
      zoom: normal; }

@supports (-ms-accelerator: true) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@-moz-document url-prefix() {
  .swal2-close:focus {
    outline: 2px solid rgba(50, 100, 150, 0.4); } }

.swal2-icon {
  position: relative;
  justify-content: center;
  width: 5em;
  height: 5em;
  margin: 1.25em auto 1.875em;
  border: .25em solid transparent;
  border-radius: 50%;
  line-height: 5em;
  cursor: default;
  box-sizing: content-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  zoom: normal; }
  .swal2-icon-text {
    font-size: 3.75em; }
  .swal2-icon.swal2-error {
    border-color: #f27474; }
    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1; }
    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }
  .swal2-icon.swal2-warning {
    border-color: #facea8;
    color: #f8bb86; }
  .swal2-icon.swal2-info {
    border-color: #9de0f6;
    color: #3fc3ee; }
  .swal2-icon.swal2-question {
    border-color: #c9dae1;
    color: #87adbd; }
  .swal2-icon.swal2-success {
    border-color: #a5dc86; }
    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
                transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
                transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0; }
    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      top: -.25em;
      left: -.25em;
      width: 100%;
      height: 100%;
      border: 0.25em solid rgba(165, 220, 134, 0.3);
      border-radius: 50%;
      z-index: 2;
      box-sizing: content-box; }
    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg);
      z-index: 1; }
    .swal2-icon.swal2-success [class^='swal2-success-line'] {
      display: block;
      position: absolute;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86;
      z-index: 2; }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }

.swal2-progresssteps {
  align-items: center;
  margin: 0 0 1.25em;
  padding: 0;
  font-weight: 600; }
  .swal2-progresssteps li {
    display: inline-block;
    position: relative; }
  .swal2-progresssteps .swal2-progresscircle {
    width: 2em;
    height: 2em;
    border-radius: 2em;
    background: #3085d6;
    color: #fff;
    line-height: 2em;
    text-align: center;
    z-index: 20; }
    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0; }
    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0; }
    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
        background: #add8e6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
        background: #add8e6; }
  .swal2-progresssteps .swal2-progressline {
    width: 2.5em;
    height: .4em;
    margin: 0 -1px;
    background: #3085d6;
    z-index: 10; }

[class^='swal2'] {
  -webkit-tap-highlight-color: transparent; }

.swal2-show {
  -webkit-animation: swal2-show 0.3s;
          animation: swal2-show 0.3s; }
  .swal2-show.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

.swal2-hide {
  -webkit-animation: swal2-hide 0.15s forwards;
          animation: swal2-hide 0.15s forwards; }
  .swal2-hide.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

[dir='rtl'] .swal2-close {
  right: auto;
  left: 0; }

.swal2-animate-success-icon .swal2-success-line-tip {
  -webkit-animation: swal2-animate-success-line-tip 0.75s;
          animation: swal2-animate-success-line-tip 0.75s; }

.swal2-animate-success-icon .swal2-success-line-long {
  -webkit-animation: swal2-animate-success-line-long 0.75s;
          animation: swal2-animate-success-line-long 0.75s; }

.swal2-animate-success-icon .swal2-success-circular-line-right {
  -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
          animation: swal2-rotate-success-circular-line 4.25s ease-in; }

.swal2-animate-error-icon {
  -webkit-animation: swal2-animate-error-icon 0.5s;
          animation: swal2-animate-error-icon 0.5s; }
  .swal2-animate-error-icon .swal2-x-mark {
    -webkit-animation: swal2-animate-error-x-mark 0.5s;
            animation: swal2-animate-error-x-mark 0.5s; }

@-webkit-keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }
.clearfix{
    margin-bottom:15px;
}            
.row{
  margin-left: 5px !important;
}
</style></head>

<body class="fix-header card-no-border" cz-shortcut-listen="true">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
		        <header class="topbar is_stuck" style="display: inline !important;position: fixed; top: 0px; width: 1903px;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b>
                            <!-- Light Logo icon -->
                            <img src="assets/images/cart_icon.png" alt="homepage" class="light-logo" style="width:34px">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         
                         <!-- Light Logo text -->  
						<span class="text-white"> Cotizador <b>Web</b></span>						 
                         
                </span></a></div><a class="navbar-brand" href="index.php">
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                </a><div class="navbar-collapse"><a class="navbar-brand" href="index.php">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    </a><ul class="navbar-nav mr-auto mt-md-0 "><a class="navbar-brand" href="index.php">
                        <!-- This is  -->
                        </a><li class="nav-item"><a class="navbar-brand" href="index.php"> </a><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        
                       
    
                    </ul>
                   
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> demo</a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li> 
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="assets/images/users/avatar.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4>demo</h4>
                                                <p class="text-muted">demo@gmail.com</p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="usuarios.php?profile=1"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li><a href="cotizaciones.php?type=1"><i class="ti-wallet"></i> Mis cotizaciones</a></li>
                                    
                                    <li role="separator" class="divider"></li>
                                   
                                    <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header><div style="position: relative; width: 1903px; height: 70px; display: block; vertical-align: baseline; float: none;"></div>        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include("menu.html");
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 866px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0">Cotizaciones</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item ">Cotizaciones</li>
                            <li class="breadcrumb-item active">Nueva</li>
                        </ol>
                    </div>
					
					
                    
                </div>
				
				
				
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
              <!-- Modal -->
              <?php
                include("modales.html");
              ?>
			<div class="modal fade bs-example-modal-lg" id="caracteristicasModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document" style=" max-width: 80% !important;">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Buscar productos</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					  <div class="row">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)">
                  <div class="input-group-prepend">
                  <button type="button" class="btn btn-outline-secondary" onclick="load(1)"><span class="fa fa-search"></span> Buscar</button>
                  </div>
                </div>						  
              </div>						
					  </div>
					</form>
          <div id="loader" style="position: absolute; text-align: center; top: 55px; width: 100%;"></div><!-- Carga gif animado -->
            <div class="outer_div">			
            </div><!-- Datos ajax Final -->
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				  </div>
				</div>
			  </div>
      </div>

      <form class="form-horizontal" method="post" id="editar_item" name="editar_item">
	<!-- Modal -->
	<div class="modal fade " id="editModalItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Editar </h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-md-8">
					<label for="codigo_item" class="control-label">Código</label>
					<input type="text" class="form-control" id="codigo_item" name="codigo_item" placeholder="" disabled="" required="">
					<input type="hidden" class="form-control" id="id_tmp" name="id_tmp">
				</div>
				<div class="col-md-4">
					<label for="cantidad_item" class="control-label">Cantidad</label>
					<input type="text" class="form-control" id="cantidad_item" name="cantidad_item" placeholder="" required="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="descripcion_item" class="control-label">Descripción</label>
					<input type="text" class="form-control" name="descripcion_item" id="descripcion_item" disabled="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="precio_item" class="control-label">Precio</label>
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-usd"></i></div>
						<input type="text" class="form-control" name="precio_item" id="precio_item" required="">
					</div>	
				</div>
				<div class="col-md-6">
					<label for="descuento_item" class="control-label">Descuento</label>
					<div class="input-group  mb-3 ">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-percent"></i></span>
							
						  </div>
						  <input type="text" class="form-control" name="descuento_item" id="descuento_item">
						</div>
						
						
				</div>

			</div>			
		</div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Actualizar datos</button>
		  </div>
		</div>
	  </div>
	</div>
</form>		<!-- Modal -->
	<div class="modal fade " id="addModalProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> Agregar nuevo producto</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		 </div>
		  <div class="modal-body">
			
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			
			<div class="row">
				<div class="col-md-6">
					<label for="codigo" class="control-label">Código</label>
					<input type="text" class="form-control" id="codigo" name="codigo" placeholder="" required="">
				</div>
				<div class="col-md-6">
					<label for="modelo" class="control-label">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" placeholder="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<label for="nombre" class="control-label">Nombre o descripción del producto</label>
					<textarea id="nombre" name="nombre" class="form-control summernote"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label for="fabricante" class="control-label">Fabricante</label>
					<select class="form-control" id="fabricante" name="fabricante">
					<option value="">-- Selecciona --</option>
											<option value="10">3M</option>
												<option value="8">Chile Empresas</option>
												<option value="7">Daker</option>
												<option value="12">Evolis</option>
												<option value="3">la colina</option>
												<option value="4">la colina</option>
												<option value="5">Obekorn</option>
												<option value="6">Polar</option>
												<option value="2">Poseidon</option>
												<option value="1">stih</option>
												<option value="9">SUPLIDORA INDUSTRIAL 6 SGIMA, C.A.</option>
										  </select>
				</div>
				<div class="col-md-4">
					<label for="estado" class="control-label">Estado</label>
					 <select class="form-control" id="estado" name="estado" required="">
						<option value="">-- Selecciona --</option>
						<option value="1" selected="">Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="precio" class="control-label">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" placeholder="" required="" pattern="^[0-9]{1,11}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="13">
				</div>
			</div>			
			
		  </form></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  
		</div>
	  </div>
	</div>	<!-- Modal -->
	<div class="modal fade" id="addModalClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> Agregar nuevo cliente</h4>	
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="resultados_ajax"></div>
			<div class="row">
				<div class="col-md-12">
					<label for="cliente" class="control-label">Nombre del cliente</label>
					<input type="text" class="form-control" id="cliente" name="cliente" placeholder="" required="">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<label for="nombre_comercial" class="control-label">Nombre comercial</label>
					<input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" placeholder="">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-7">
					<label for="giro" class="control-label">Giro o actividad económica</label>
					<input type="text" class="form-control" id="giro" name="giro" placeholder="">
				</div>
				
				<div class="col-md-5">
					<label for="cliente" class="control-label">Nº de registro fiscal</label>
					<input type="text" class="form-control" id="registro" name="registro" placeholder="">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<label for="direccion" class="control-label">Dirección</label>
					<textarea class="form-control" id="direccion" name="direccion"></textarea>
				</div>
				
				
			</div>
			
			<div class="row">
				<div class="col-md-7">
					<label for="email" class="control-label">Correo electrónico</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="">
				</div>
				<div class="col-md-5">
					<label for="fijo" class="control-label">Teléfono</label>
					<input type="text" class="form-control" id="fijo" name="fijo" placeholder="">
				</div>
				
				
			</div>
			  
			
		  </form></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  
		</div>
	  </div>
	</div>								
				<div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                                                     
							 							
							<form class="needs-validations" id="datos_cotizacion">
							<fieldset>
              <legend style='height:50px'><h3>Información General <label class='float-right'>COTIZACIÓN
                  <b>
                  <?php
                  $result = $con->query("SET NAMES 'utf8'");
                  $sql="SELECT max(id_cotizacion) as cont FROM cotizaciones_demo ";
                  if ($result = $con->query($sql)) {
                      while ($row = $result->fetch_row()) {
                        $contador=$row[0];
                      }
                      /* cerramos la conexion */
                      $result->close();
                      echo $contador++;
                  }
                    ?>
                  </b>
                </label></h3>  </legend>
                <hr>
                
                <div class="row">
                  <div class="col-md-3">
                    <!--
                  <label>Clientes/Prostecto</label><br>
                  <input type="checkbox" checked data-toggle="toggle" data-on="Clientes" data-off="Prospectos" data-onstyle="info" data-offstyle="dark" checked>-->
                  
                  <input type="radio" id="r_clientes" name="gender" value="clientes">
                  <label for="r_clientes" style="margin-right:18px;">Clientes</label>
                  <input type="radio" id="r_prospectos" name="gender" value="prospectos">
                  <label for="r_prospectos">Prospectos</label>
                  
                    <!-- <input type="text" class="form-control ui-autocomplete-input" id="nombre_cliente" placeholder="Selecciona al cliente" required="" autocomplete="off"> -->
                    <!-- <input id="id_cliente" name="id_cliente" type="hidden" value=""> -->
                    <select name="combo_clientes" id="combo_clientes" class='form-control' style='width:99%'>
                    <option value=''>Selecciona...</option>
                    <?php
                    $sql="SELECT id_cliente, Razon_Social FROM clientes where Estatus='activo' order by Razon_Social asc";
                    $query = mysqli_query($con, $sql);
                    while ($row=mysqli_fetch_array($query)){
                        $id_cliente=$row['id_cliente'];
                        $nombre=$row['Razon_Social'];
                    ?>
                    <option value='<? echo $nombre; ?>'><? echo $nombre; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                  </div>
                  
                  <div class="col-md-2">
                    <label>Contacto</label>	
                    <input type="text" class="form-control " id="contacto" placeholder="" value="" readonly="">
                  
                  </div>
                  <div class="col-md-2">
                    <label>Teléfono de contacto</label>	
                    <input type="text" class="form-control " id="tel1" placeholder="" value="" readonly="">	
                    
                  </div>
                  
                  <div class="col-md-2">
                    <label>E-mail de contacto</label>	
                    <input type="text" class="form-control " id="email_contact" placeholder="" value="" readonly="">
                    
                  </div>
                  <div class="col-md-2">
                    <label>Moneda</label>
                    <select name="moneda" id="moneda" class="form-control input-sm">
                    <?php
                      $sql="SELECT * FROM  monedas order by id_moneda asc";
                      $query = mysqli_query($con, $sql);
                      while ($row=mysqli_fetch_array($query)){
                          $id_moneda=$row['id_moneda'];
                          $nombre=$row['Nombre'];
                    ?>
                      <option value=''><? echo $nombre; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-2">
                    <label>Condiciones de pago</label>
                    <select name="combo_condiciones" id="combo_condiciones" class='form-control'>
                      <option value="">Selecciona...</option>
                      <option value="contado">Contado</option>
                      <option value="15">Credito 15 días</option>
                      <option value="30">Credito 30 días</option>
                      <option value="45">Credito 45 días</option>
                      <option value="60">Credito 60 días</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label>Validéz de la cotización</label>
                    <input type="text" class="form-control" id="validez" name="validez" placeholder="Validéz de la cotización" value="">
                  </div>
                  <div class="col-md-2">
                    <label>Tiempo de entrega</label>
                    <input type="text" class="form-control" id="entrega" name="entrega" placeholder="Tiempo de entrega" value="">
                  </div>
                  <div class="col-md-2">
                    <label>Ubicación</label>
                    <select name="estado" class='form-control'>
                      <option value="vacio">Seleccione uno...</option>
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="CDMX">Ciudad de México</option>
                      <option value="Coahuila">Coahuila</option>
                      <option value="Colima">Colima</option>
                      <option value="Durango">Durango</option>
                      <option value="Estado de México">Estado de México</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="Michoacán">Michoacán</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo León">Nuevo León</option>
                      <option value="Oaxaca">Oaxaca</option>
                      <option value="Puebla">Puebla</option>
                      <option value="Querétaro">Querétaro</option>
                      <option value="Quintana Roo">Quintana Roo</option>
                      <option value="San Luis Potosí">San Luis Potosí</option>
                      <option value="Sinaloa">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucatán">Yucatán</option>
                      <option value="Zacatecas">Zacatecas</option>
                  </select>
                  </div>
                  <div class="col-md-1">
                    <label for=""># Revisión</label>
                        <input type="text" class='form-control' placeholder='# revision'>
                  </div>
                  <div class="col-md-1">
                    <label for="">Existe plano</label>
                        <input type="checkbox" class='form-control' checked>
                  </div>
                  <div class="col-md-1">
                    <label for="">Existe muestra</label>
                        <input type="checkbox" class='form-control' checked>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                <div class="col-md-2">
                    <label for="">Periodos de entrega</label>
                        <select name="" class='form-control' id="">
                          <option value="vacio">Selecciona...</option>
                          <option value="diaria">Diaria</option>
                          <option value="semanal">Semanal</option>
                          <option value="quincenal">Quincenal</option>
                          <option value="mensual">Mensual</option>
                        </select>
                  </div>
                  <div class="col-md-2">
                  <label for="">Ventanas</label>
                  <input type="text" class='form-control' placeholder='Ventanas'>
                  </div>
                  <div class="col-md-2">
                    <label for="exampleSelectMultiple">Consumo mensual (piezas)</label>
                    <input type="number" class='form-control' min='1' name="" id="" step="1" value="1" >
                  </div>
                  <div class="col-md-4">
                    <label for="">Comentarios</label>
                        <textarea name="" id="" rows="1" class='form-control'></textarea>
                  </div>
                </div>
              </fieldset>

							<hr>
							<div class="row">
								<div class="col-md-12 text-right">
								
								<div class="btn-group" role="group" aria-label="Basic example">
								  <!-- <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addModalClient">
										 <span class="fa fa-plus"></span> Nuevo cliente
										</button>
								  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addModalProduct">
										 <span class="fa fa-plus"></span> Nuevo producto
                    </button>
                    
								  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
										 <span class="fa fa-search"></span> Buscar productos
										</button>--> 
																				
								</div>

								</div>
							</div>
              
              <div class="container">
                <div id="example-tabs" style="height:350px;border: darkslategray;border: 3px solid darkslategray;">
                  <h3><i class="fa fa-archive" aria-hidden="true"></i> Componentes</h3>
                  <section>
                    
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="exampleSelectMultiple">Componente 
										 <span style='cursor:pointer' class="fa fa-search" data-toggle="modal" data-target="#caracteristicasModal"></span></label>
                        <select class="form-control" id="combo_componentes">
                          <option value='vacio'>Selecciona...</option>
                          <option value='caja'>Caja</option>
                          <option value='separador'>Separador</option>
                          <option value='rejilla'>Rejilla</option>
                          <option value='tapa'>Tapa</option>
                          <option value='banda'>Banda</option>
                          <option value='inserto'>Inserto</option>
                          <option value='mampara'>Mampara</option>
                        </select>
                        <small id="help_caracteristicas" class="form-text text-muted">Caracteristicas</small>
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectMultiple">Tipo de flauta</label>
                          <select class="form-control" id="exampleSelectMultiple">
                          <option value='vacio'>Selecciona...</option>
                            <option value='Tipo_B'>Tipo B</option>
                            <option value='Tipo_C'>Tipo C</option>
                            <option value='Tipo_E'>Tipo E</option>
                            <option value='Tipo_BC'>Tipo BC</option>
                          </select>
                          <small id="help_caracteristicas" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="exampleSelectMultiple">Matierial Primario</label>
                        <select class="form-control" id="combo_material_primario">
                          <option value='vacio'>Selecciona...</option>
                          <option value='carton'>Carton</option>
                          <option value='fibra_solida'>Fibra sólida</option>
                          <option value='hoeny_comb'>Honey Comb</option>
                          <option value='polietileno'>Polietileno</option>
                          <option value='coroplast'>Coroplast</option>
                          <option value='mdf'>MDF</option>
                          <option value='acrilico'>Acrilico</option>
                        </select>
                      </div>
                      <div class="form-group"><br>
                      <label for="exampleSelectMultiple">Largo Total (mm)</label>
                          <input type="text" class='form-control' >
                      </div>
                    </div>
                    <div class="col-md-2">                  
                      <div class="form-group">
                      <label for="exampleSelectMultiple">Tipo de contenedor</label>
                        <select class="form-control" id="combo_tipo_contenedor">
                          <option value='vacio'>Selecciona...</option>
                          <option value='regular_ranurada'>Regular ranurada</option>
                          <option value='suajada'>Suajada</option>
                          <option value='autoarmable'>Autoarmable</option>
                          <option value='autoarmable_suajada'>Autoarmable suajada</option>
                          <option value='bin'>Bin</option>
                          <option value='especial'>Especial</option>
                        </select>
                        <div class="form-group"><br><br>
                        <label for="exampleSelectMultiple">Ancho Total (mm)</label>
                          <input type="text" class='form-control' >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">                  
                      <div class="form-group">
                      <label for="exampleSelectMultiple">Matierial específico</label>
                        <select class="form-control" id="combo_material_especifico">
                          <option value='vacio'>Selecciona...</option>
                          <option value='sencillo'>Sencillo</option>
                          <option value='doble'>Doble</option>
                          <option value='triple'>Triple</option>
                        </select>
                        
                        <div class="form-group"><br><br>
                        <label for="exampleSelectMultiple">M<sup>2</sup> x pieza</label>
                          <input type="text" class='form-control' disabled="disabled" class='disabled' >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">                  
                      <div class="form-group">
                        <label for="exampleSelectMultiple">Resistencia/Grosor</label>
                        <input type="text" class='form-control'> 
                        <div class="form-group"><br><br>
                          <label for="exampleSelectMultiple">Consumo de material (M<sup>2</sup>)</label>
                          <input type="text" class='form-control' disabled="disabled" class='disabled' >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">                  
                      <div class="form-group">
                      <label for="exampleSelectMultiple">Color</label>
                        <input type="text" class='form-control'> 
                        <div class="form-group"><br><br>
                          <label for="exampleSelectMultiple">Costo de material (M<sup>2</sup>)</label>
                          <input type="text" class='form-control' disabled="disabled" class='disabled' >
                        </div>
                      </div>
                    </div>
                                         
                    </section>
                    <h3><i class="fa fa-cubes" aria-hidden="true"></i> Material complementario</h3>
                    <section>
                     <div class='row' style="width: 100%;">
                      <div class="col-md-2">                  
                          <div class="form-group">
                            <label for="exampleSelectMultiple">Pegamento</label>
                            <select class="form-control" id="exampleSelectMultiple">
                              <option value='vacio'>Selecciona...</option>
                              <option value='silicon'>Silicon</option>
                              <option value='blanco'>Blanco</option>
                              <option value='velcro'>Velcro</option>
                              <option value='lapiz'>Lapiz</option>
                              <option value='cianocrilato'>Cianocrilato</option>
                              <option value='acrilico'>Acrilico</option>
                            </select>
                          </div>
                          <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_maquinaria">Maquinaria</label>
                          <select class="form-control" id="combo_maquinaria">
                            <option value='vacio'>Selecciona...</option>
                            <option value='suajadora'>Suajadora plana</option>
                            <option value='cortadora'>Cortadora</option>
                            <option value='glicol'>Glicol</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_tintas">Tintas</label>
                          <select class="form-control" id="combo_tintas">
                            <option value='vacio'>Selecciona...</option>
                            <option value='si'>Si</option>
                            <option value='no'>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Amarre</label>
                          <select class="form-control" id="combo_amarre">
                            <option value='vacio'>Selecciona...</option>
                            <option value='fleje'>Fleje</option>
                            <option value='lazo'>Lazo</option>
                            <option value='emplaye'>Emplaye</option>
                            <option value='cinta'>Cinta</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_grapas">Grapas</label>
                          <select class="form-control" id="combo_grapas">
                            <option value='vacio'>Selecciona...</option>
                            <option value='si'>Si</option>
                            <option value='no'>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_tarimas">Tarimas</label>
                          <select class="form-control" id="combo_tarimas">
                            <option value='vacio'>Selecciona...</option>
                            <option value='si'>Si</option>
                            <option value='no'>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_tarimas">Herramental</label>
                          <select class="form-control" id="combo_herramental">
                            <option value='vacio'>Selecciona...</option>
                            <option value='transferencia'>Trasferencia</option>
                            <option value='compra'>Compra</option>
                          </select>
                        </div>
                      </div>
                     </div>

                    <!-- <div class='row' style="width: 100%;">
                     <div class="col-md-2"> 
                        <div class="form-group">
                          <label for="exampleSelectMultiple" id="label_tarimas">Tipo de herramental</label>
                          <select class="form-control" id="combo_herramental">
                            <option value='vacio'>Selecciona...</option>
                            <option value='suaje'>Suaje</option>
                            <option value='grabado'>Grabado</option>
                            <option value='sello'>Sello</option>
                            <option value='pantalla'>Pantalla</option>
                          </select>
                        </div>
                      </div></div>-->
                      
                    </section>
                    <h3><i class="fa fa-truck" aria-hidden="true"></i> Flete</h3>
                    <section>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Volumen</label>
                          <input type="text" class='form-control'> 
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Distancia Km</label>
                          <input type="text" class='form-control'> 
                        </div>
                      </div>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Tipo de transporte</label>
                          <select class="form-control" id="exampleSelectMultiple">
                            <option>Selecciona...</option>
                            <option>Cliente</option>
                            <option>Propio</option>
                            <option>Caja seca</option>
                            <option>Plataforma</option>
                            <option>1 Ton</option>
                            <option>3 1/2 Ton</option>
                            <option>Lowboy</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Proveedor</label>
                          <select class="form-control" id="exampleSelectMultiple">
                            <option>Selecciona...</option>
                            <option>Prov 1</option>
                            <option>Prov 2</option>
                            <option>Prov 3</option>
                            <option>Prov 4</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Costo x Km</label>
                          <input type="text" class='form-control'> 
                        </div>
                      </div>
                    </section>
                     <h3><i class="fas fa-hand-holding-usd" aria-hidden="true"></i> Gastos Administrativos</h3>
                    <section>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">??????</label>
                          <select class="form-control" id="exampleSelectMultiple">
                            <option>Selecciona...</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Mano de obra</label>
                         <input type="text" class='form-control' placeholder="0.0231 x ciclo">
                        </div>
                      </div>
                      <div class="col-md-2">                  
                        <div class="form-group">
                          <label for="exampleSelectMultiple">Scrap</label>
                         <input type="text" class='form-control' placeholder="1%">
                        </div>
                      </div>
                    </section>
                </div>                
              </div>
							
							<div class="row">
								<div id="resultados2" class="col-md-12" style="margin-top:10px"></div><!-- Carga los datos ajax -->
								<div id="resultados" class="col-md-12" style="margin-top:10px"><div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>COMPONENTE</th>
      <th>METERIAL COMPLEMENTARIO</th>
      <th class="text-center">CANTIDAD MENSUAL</th>
      <th class="text-right">COSTO UNIT.</th>
      <th class="text-right">COSTO TOTAL.</th>	
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
		<tr >
      <td>1</td>
      <td> Caja</td>
      <td>
          <a tabindex="0"
          class="btn btn-info" 
          role="button" 
          data-html="true" 
          data-toggle="tooltip" 
          data-trigger="hover"        
          title="<b>Example popover</b> - content<br>mas contenido<br>otra linea">Silicon</a>
      </td>
      <td class="text-center">1000 (piezas)</td>
      <td class="text-right">$ 2.45</td>
      <td class="text-right">$ 2,450.00</td>
      <td>
        <a href="#editModalItem" class='btn btn-info' data-toggle="modal" data-codigo="123" data-cantidad="1" data-descripcion="Producto de prueba" data-descuento="0.00" data-precio="99.00" data-id="1232"><i class="fa fa-edit"></i></a> 
        <a href="#" onclick="eliminar('')" class='btn btn-danger'><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    		
    
		<tr>
    <td colspan="5" class="text-right">SUBTOTAL:</td>
    <td class="text-right">$ 2,450.00 </td>
    </tr>
    <tr>
      <td colspan="5" class="text-right"><input type='number' min='10' max='50' class='form-control' value='20' style='width:7%'> %  UTILIDAD:</td>
      <td class="text-right">$ 490.00</td>
    </tr>
    <tr>
      <td colspan="5" class="text-right">FLETE:</td>
      <td class="text-right">$ 5,990.00</td>
    </tr>
    <tr>
      <td colspan="5" class="text-right">TOTAL:</td>
      <td class="text-right">$ 7,940.00</td>
    </tr>
    <tr>
      <td colspan="5" class="text-right">
        IVA:	</td>
      <td class="text-right">$ 470.40</td>
    </tr>
    <tr>
    <td colspan="5" class="text-right">TOTAL $</td>
    <td class="text-right">$ 3,410.40</td>
  </tr>
</tbody></table>
<div class="float-right">
                  <button type="button" id='btn_guardar_cotizacion' class="btn btn-success">
										  <span class="fa fa-save"></span> Guardar  
										</button>					
									</div>
</div></div><!-- Carga los datos ajax -->
							</div>
							
							</form>	
							
							
                        </div>
                    </div>
                </div>
								

				
				
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	
    <!--<script src="assets/plugins/jquery/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    
  <script src="assets/js/modernizr-2.6.2.min.js"></script>
  <!--<script src="assets/js/jquery-1.9.1.min.js"></script>-->
  <!--<script src="assets/js/jquery.cookie-1.3.1.js"></script>-->
  
    <!-- Bootstrap tether Core JavaScript -->
    <!--<script src="assets/plugins/bootstrap/js/popper.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
   
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
	<!--Sweetalert plugin -->
	  <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>	
    <script type="text/javascript" src="assets/js/VentanaCentrada.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
	

	
  <script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <script src="assets/js/jquery.steps.js"></script>
  
    
    <script type="text/javascript" src="assets/js/nueva_cotizacion.js"></script>
    <script>
     $(document).on("ready",inicio);
    </script>
  

<ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div></body></html>