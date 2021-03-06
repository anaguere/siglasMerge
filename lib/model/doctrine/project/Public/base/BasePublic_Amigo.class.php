<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_Amigo', 'doctrine');

/**
 * BasePublic_Amigo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_id
 * @property integer $funcionario_amigo_id
 * @property boolean $autorizacion
 * @property timestamp $f_autorizacion
 * @property string $status
 * @property integer $id_update
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Funcionarios_Funcionario $Funcionarios_FuncionarioAmigo
 * 
 * @method integer                  getId()                            Returns the current record's "id" value
 * @method integer                  getFuncionarioId()                 Returns the current record's "funcionario_id" value
 * @method integer                  getFuncionarioAmigoId()            Returns the current record's "funcionario_amigo_id" value
 * @method boolean                  getAutorizacion()                  Returns the current record's "autorizacion" value
 * @method timestamp                getFAutorizacion()                 Returns the current record's "f_autorizacion" value
 * @method string                   getStatus()                        Returns the current record's "status" value
 * @method integer                  getIdUpdate()                      Returns the current record's "id_update" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionario()       Returns the current record's "Funcionarios_Funcionario" value
 * @method Funcionarios_Funcionario getFuncionariosFuncionarioAmigo()  Returns the current record's "Funcionarios_FuncionarioAmigo" value
 * @method Public_Amigo             setId()                            Sets the current record's "id" value
 * @method Public_Amigo             setFuncionarioId()                 Sets the current record's "funcionario_id" value
 * @method Public_Amigo             setFuncionarioAmigoId()            Sets the current record's "funcionario_amigo_id" value
 * @method Public_Amigo             setAutorizacion()                  Sets the current record's "autorizacion" value
 * @method Public_Amigo             setFAutorizacion()                 Sets the current record's "f_autorizacion" value
 * @method Public_Amigo             setStatus()                        Sets the current record's "status" value
 * @method Public_Amigo             setIdUpdate()                      Sets the current record's "id_update" value
 * @method Public_Amigo             setFuncionariosFuncionario()       Sets the current record's "Funcionarios_Funcionario" value
 * @method Public_Amigo             setFuncionariosFuncionarioAmigo()  Sets the current record's "Funcionarios_FuncionarioAmigo" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_Amigo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.amigo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.amigo_id',
             'length' => 4,
             ));
        $this->hasColumn('funcionario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_amigo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('autorizacion', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('f_autorizacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasOne('Funcionarios_Funcionario as Funcionarios_FuncionarioAmigo', array(
             'local' => 'funcionario_amigo_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}