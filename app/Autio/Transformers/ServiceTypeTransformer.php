<?php
namespace Autio\Transformers;

class ServiceTypeTransformer extends Transformer
{
  
  public function transform($service_type)
  {
    return [
      'id' => $service_type->id,
      'type' => $service_type->type
    ];  
  } 

}