<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Maketree {
    
    protected $tree;
    
    public function _construct($data){
        //print_r($data);
        //$this->tree = $this->buildTree($data, 'parentId', 'id');
    }
    function result($data,$parentId,$id){
        $result = $this->buildTree($data, $parentId, $id);
        return $result;
    }
    protected function buildTree($flat, $pidKey, $idKey = null){
        $grouped = array();
        foreach ($flat as $sub){
            $grouped[$sub[$pidKey]][] = $sub;
        }

        $fnBuilder = function($siblings) use (&$fnBuilder, $grouped, $idKey) {
            foreach ($siblings as $k => $sibling) {
                $id = $sibling[$idKey];
                if(isset($grouped[$id])) {
                    $sibling['children'] = $fnBuilder($grouped[$id]);
                }
                $siblings[$k] = $sibling;
            }
            return $siblings;
        };

        $tree = $fnBuilder($grouped[0]);
        return $tree;
    }
    
}
   
?>
