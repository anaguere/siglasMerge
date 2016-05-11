<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Correspondencia_PlantillaFuncionario', 'doctrine');

/**
 * BaseCorrespondencia_PlantillaFuncionario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $plantilla_id
 * @property integer $funcionario_id
 * @property integer $id_update
 * @property string $ip_update
 * @property Correspondencia_Plantilla $Correspondencia_Plantilla
 * @property Funcionarios_Funcionario $Funcionarios_Funcionario
 * 
 * @method integer                              getId()                        Returns the current record's "id" value
 * @method integer                              getPlantillaId()               Returns the current record's "plantilla_id" value
 * @method integer                              getFuncionarioId()             Returns the current record's "funcionario_id" value
 * @method integer                              getIdUpdate()                  Returns the current record's "id_update" value
 * @method string                               getIpUpdate()                  Returns the current record's "ip_update" value
 * @method Correspondencia_Plantilla            getCorrespondenciaPlantilla()  Returns the current record's "Correspondencia_Plantilla" value
 * @method Funcionarios_Funcionario             getFuncionariosFuncionario()   Returns the current record's "Funcionarios_Funcionario" value
 * @method Correspondencia_PlantillaFuncionario setId()                        Sets the current record's "id" value
 * @method Correspondencia_PlantillaFuncionario setPlantillaId()               Sets the current record's "plantilla_id" value
 * @method Correspondencia_PlantillaFuncionario setFuncionarioId()             Sets the current record's "funcionario_id" value
 * @method Correspondencia_PlantillaFuncionario setIdUpdate()                  Sets the current record's "id_update" value
 * @method Correspondencia_PlantillaFuncionario setIpUpdate()                  Sets the current record's "ip_update" value
 * @method Correspondencia_PlantillaFuncionario setCorrespondenciaPlantilla()  Sets the current record's "Correspondencia_Plantilla" value
 * @method Correspondencia_PlantillaFuncionario setFuncionariosFuncionario()   Sets the current record's "Funcionarios_Funcionario" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorrespondencia_PlantillaFuncionario extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('correspondencia.plantilla_funcionario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'correspondencia.plantilla_funcionario_id',
             'length' => 4,
             ));
        $this->hasColumn('plantilla_id', 'integer', 4, array(
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
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('ip_update', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Correspondencia_Plantilla', array(
             'local' => 'plantilla_id',
             'foreign' => 'id'));

        $this->hasOne('Funcionarios_Funcionario', array(
             'local' => 'funcionario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}