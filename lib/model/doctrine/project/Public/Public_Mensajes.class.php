<?php

/**
 * Public_Mensajes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    siglas-(institucion)
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Public_Mensajes extends BasePublic_Mensajes
{
    public function save(Doctrine_Connection $conn = null)
    {
        if($this->isNew())
        {
            $this->setFuncionarioEnviaId(sfContext::getInstance()->getUser()->getAttribute('funcionario_id'));
        }
        return parent::save($conn);
    }
}