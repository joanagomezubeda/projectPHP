<?php

    class Shares extends Controller{
        protected function index()
        {
            $viewmodel = new ShareModel();
            $this->ReturnView($viewmodel->index(), true);
        }
    }

?>