<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
use \App\Entity\UuiuD;

class Pessoa {

  public $id;
  public $nome;
  public $idade;
  public $created_at;
  public $user;
  
/**
   * Método responsável por cadastrar uma nova pessoa no banco
   * @return boolean
   */
  public function cadastrar(){
    //INSERIR A REGISTRO NO BANCO
    $newId = UuiuD::gera(); //exec('uuidgen -r');
    $obDatabase = new Database('pessoa');
    $obDatabase->insert([
                            'id'          => $newId,
                            'nome'       => $this->nome,
                            'idade'      => $this->idade,
                            'created_at' => date("Y-m-d H:i:s"),
                            'user'       => $this->user
                       ]);

    //RETORNAR SUCESSO
    return true;
  }


    /**
   * Método responsável por atualizar a pessoa no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('pessoa'))->update('id = '.$this->id,[
                                           'nome'       => $this->nome,
                                           'idade'      => $this->idade,
                                           'updated_at' =>  date("Y-m-d H:i:s"),
                                           'user' => $this->user
                                         ]);
  }


  /**
   * Método responsável por excluir a professor do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('pessoa'))->delete('id = "'.$this->id .'"');
  }

  /**
   * Método responsável por obter as professores do banco de dados
   * @param  string $whereagente
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function gets($where = null, $order = null, $limit = null){
    return (new Database('pessoa'))->select($where,$order,$limit)
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
    $where = ' id = "'.$id.'" ';
    return (new Database('pessoa'))->select($where)
                                     ->fetchObject(self::class);
  }


  /**
   * Método responsável por obter a quantidade de registros
   * @param  integer $id
   * @return integer
   */
  public static function getQntd($where = null){
    return (new Database('pessoa'))->select($where, null, null, 'COUNT(*) as qtd')
                                  ->fetchObject()
                                  ->qtd;
  }
 
}
