<?php
namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NuevaGuia implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $res;

  public function __construct($res)
  {
      $this->res = $res;
  }

  public function broadcastOn()
  {
      return ['canal-guia'];
  }

  public function broadcastAs()
  {
      return 'nueva-guia';
  }
}
