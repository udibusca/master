<?php
class Cidade_model extends CI_Model {
    
    public static $tabela = 'tb_cidade';
          
    function __construct() {
        parent::__construct();
    }
    function inserir($data) {
        $this->db->insert(self::$tabela, $data);
        return $this->db->insert_id();
    }
    function listar() {
        $query = $this->db->get(self::$tabela);
        return $query->result();
    }    
    function deletar($COD_IBGE) {
        $this->db->where('COD_IBGE', $COD_IBGE);
        return $this->db->delete(self::$tabela);
    }

    function editar($COD_IBGE) {
        $this->db->where('COD_IBGE', $COD_IBGE);
        $query = $this->db->get(self::$tabela);
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('COD_IBGE', $data['COD_IBGE']);
        $this->db->set($data);
        return $this->db->update(self::$tabela);
    }
    
}
