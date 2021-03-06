<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Correspondencia_VistobuenoConfig', 'doctrine');

/**
 * BaseCorrespondencia_VistobuenoConfig
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $funcionario_unidad_id
 * @property integer $funcionario_id
 * @property integer $orden
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $id_update
 * @property integer $funcionario_cargo_id
 * @property string $status
 * @property Correspondencia_FuncionarioUnidad $Correspondencia_FuncionarioUnidad
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * @property Doctrine_Collection $Correspondencia_CorrespondenciaVistobueno
 * 
 * @method integer                           getId()                                        Returns the current record's "id" value
 * @method integer                           getFuncionarioUnidadId()                       Returns the current record's "funcionario_unidad_id" value
 * @method integer                           getFuncionarioId()                             Returns the current record's "funcionario_id" value
 * @method integer                           getOrden()                                     Returns the current record's "orden" value
 * @method timestamp                         getCreatedAt()                                 Returns the current record's "created_at" value
 * @method timestamp                         getUpdatedAt()                                 Returns the current record's "updated_at" value
 * @method integer                           getIdUpdate()                                  Returns the current record's "id_update" value
 * @method integer                           getFuncionarioCargoId()                        Returns the current record's "funcionario_cargo_id" value
 * @method string                            getStatus()                                    Returns the current record's "status" value
 * @method Correspondencia_FuncionarioUnidad getCorrespondenciaFuncionarioUnidad()          Returns the current record's "Correspondencia_FuncionarioUnidad" value
 * @method Funcionarios_Funcionario          getFuncionariosFuncionario()                   Returns the current record's "Funcionarios_Funcionario" value
 * @method Doctrine_Collection               getCorrespondenciaCorrespondenciaVistobueno()  Returns the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * @method Correspondencia_VistobuenoConfig  setId()                                        Sets the current record's "id" value
 * @method Correspondencia_VistobuenoConfig  setFuncionarioUnidadId()                       Sets the current record's "funcionario_unidad_id" value
 * @method Correspondencia_VistobuenoConfig  setFuncionarioId()                             Sets the current record's "funcionario_id" value
 * @method Correspondencia_VistobuenoConfig  setOrden()                                     Sets the current record's "orden" value
 * @method Correspondencia_VistobuenoConfig  setCreatedAt()                                 Sets the current record's "created_at" value
 * @method Correspondencia_VistobuenoConfig  setUpdatedAt()                                 Sets the current record's "updated_at" value
 * @method Correspondencia_VistobuenoConfig  setIdUpdate()                                  Sets the current record's "id_update" value
 * @method Correspondencia_VistobuenoConfig  setFuncionarioCargoId()                        Sets the current record's "funcionario_cargo_id" value
 * @method Correspondencia_VistobuenoConfig  setStatus()                                    Sets the current record's "status" value
 * @method Correspondencia_VistobuenoConfig  setCorrespondenciaFuncionarioUnidad()          Sets the current record's "Correspondencia_FuncionarioUnidad" value
 * @method Correspondencia_VistobuenoConfig  setFuncionariosFuncionario()                   Sets the current record's "Funcionarios_Funcionario" value
 * @method Correspondencia_VistobuenoConfig  setCorrespondenciaCorrespondenciaVistobueno()  Sets the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorrespondencia_VistobuenoConfig extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('correspondencia.vistobueno_config');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'correspondencia.vistobueno_config_id',
             'length' => 4,
             ));
        $this->hasColumn('funcionario_unidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
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
        $this->hasColumn('orden', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_cargo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Correspondencia_FuncionarioUnidad', array(
             'local' => 'funcionario_unidad_id',
             'foreign' => 'id'));

        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $this->hasMany('Correspondencia_CorrespondenciaVistobueno', array(
             'local' => 'id',
             'foreign' => 'vistobueno_config_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}