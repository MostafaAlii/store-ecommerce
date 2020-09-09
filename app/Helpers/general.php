<?php
// get Main CSS File ltr or rtl ::
function getMainStyleCssFile(){
    return app()->getLocale() == 'ar' ? 'main' : 'mainltr';
}
