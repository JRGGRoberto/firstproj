<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \App\Entity\UuiuD;

class Cidade {

  public $id_cidade;
  public $nome;
  public $created_at;
  public $updated_at;
  
/**
   * Método responsável por cadastrar uma nova cidade no banco
   * @return boolean
   */
  public function cadastrar(){
    //INSERIR A REGISTRO NO BANCO
    $newId = UuiuD::gera(); //exec('uuidgen -r');
    $obDatabase = new Database('cidade');
    $obDatabase->insert([
                            'id_cidade'  => $newId,
                            'nome'       => $this->nome,
                            'created_at' => date("Y-m-d H:i:s"),
                       ]);

    //RETORNAR SUCESSO
    return true;
  }


    /**
   * Método responsável por atualizar a cidade no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('cidade'))->update('id_cidade = '.$this->id_cidade,[
                                           'nome'       => $this->nome,
                                           'updated_at' =>  date("Y-m-d H:i:s"),
                                         ]);
  }


  /**
   * Método responsável por excluir a professor do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('cidade'))->delete('id_cidade = "'.$this->id_cidade .'"');
  }

  /**
   * Método responsável por obter as professores do banco de dados
   * @param  string $whereagente
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function gets($where = null, $order = null, $limit = null){
    return (new Database('cidade'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por obter as professores do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function get($id){
    $where = ' id_cidade = "'.$id.'" ';
    return (new Database('cidade'))->select($where)
                                     ->fetchObject(self::class);
  }


  /**
   * Método responsável por obter a quantidade de registros
   * @param  integer $id
   * @return integer
   */
  public static function getQntd($where = null){
    return (new Database('cidade'))->select($where, null, null, 'COUNT(*) as qtd')
                                  ->fetchObject()
                                  ->qtd;
  }
 
}
