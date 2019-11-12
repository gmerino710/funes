<?php
class Model_listado extends CI_Model 
{
//herada constructor
    public function __construct()
    {
        parent::__construct();
    }

     public function listar3($item)
     {
        if($item==1) {

            $query =$this->db->get('listado'); 

            return $query->result_array();
        }

        
       
        
    } 
   // guardar datos

   public function create_item($data)
   {
       // GUARDAR VALORES
     if (isset($data)) {
         # code...
         $this->db->insert('listado',$data);
     }else {
        echo 'error';
     }
   
   }

   public function del_item($id)
   {
          //Eliminar
     if (isset($id)) {
        $v_id = array('id'=>$id);
        $this->db->delete('listado',$v_id);
    }else {
       echo 'error';
    }
   }
    
   public function show_task($id)
   {
       // datos
    
    $this->db->select('Item ,Descripcion ,Fecha');
    $query = $this->db->get_where('listado',array('id'=>$id)); 
    return $query->result_array();
      
   }

   public function show_list($id)
   {
       // retorn un inner joins
    $this->db->select('r.*,s.*');
    $this->db->from('listado r');
    $this->db->join('stado s', 'r.Id_tipo = s.Id_tipo');
    $this->db->where(array('r.Id'=>$id));
    $query = $this->db->get();
   
  // $listad= $this->db->call_function('listar_prioridad',$id);
   
    return $query ->result_array();
}

   // d las  tabla tipo

 public function Nestados($v)
 {
    if ($v==0) {
        $query = $this->db->get('stado'); 

        return  $query->result_array();
    }
    if ($v==1) {
        $query = $this->db->get('stado',3); 

        return  $query->result_array();
    }
    
 }

 public function finalizada ($estado,$id)
 {
   // codigo para cambiar valor
   if (isset($estado)&& isset($id)) {
       // buscar
       $this->db->where('Id',$id);
       // actuzalizasr
       $this->db->update('listado',$estado);
   }
    else {
        echo 'datos no recividos';
    }
 }

// borrar todo
    public function truncate_data()
    {
        $query = $this->db->truncate('listado');
        return $query;
    }

}
