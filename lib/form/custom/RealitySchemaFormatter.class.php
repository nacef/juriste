<?php

class RealitySchemaFormatter extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat       = "<p>%label%<br/>%field%%help%\n%hidden_fields%%error%</p>\n",
    $errorRowFormat  = "<span class=\"error\">%errors%</span>\n",
    $helpFormat      = '<br />%help%',
    $decoratorFormat = "%content%";
}

