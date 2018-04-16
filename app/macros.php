<?php


\Illuminate\Http\Request::macro('isFormSubmittedRequest', function () {
    /** @var \Illuminate\Http\Request $this */
   return $this->isMethod('post') && ! $this->isXmlHttpRequest() && ! config('app.debug');
});