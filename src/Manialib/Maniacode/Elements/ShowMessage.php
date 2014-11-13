<?php

namespace Manialib\Maniacode\Elements;

use Manialib\XML\Node;

class ShowMessage extends Node
{
    protected $nodeName = 'show_message';

    protected $message;

    public function __construct()
    {
        $this->message = Node::create()
            ->setNodeName('message')
            ->appendTo($this);
    }

    public function setMessage($message)
    {
         $this->message->setNodeValue($message);
         return $this;
    }

    public function getMessage()
    {
        $this->message->getNodeValue();
        return $this;
    }
}