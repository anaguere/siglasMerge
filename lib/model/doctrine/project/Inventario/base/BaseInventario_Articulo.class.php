<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Inventario_Articulo', 'doctrine');

/**
 * BaseInventario_Articulo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $unidad_medida_id
 * @property string $codigo
 * @property string $nombre
 * @property float $stop
 * @property string $status
 * @property integer $id_update
 * @property string $ip_update
 * @property Inventario_UnidadMedida $Inventario_UnidadMedida
 * @property Doctrine_Collection $Inventario_Inventario
 * 
 * @method integer                 getId()                      Returns the current record's "id" value
 * @method integer                 getUnidadMedidaId()          Returns the current record's "unidad_medida_id" value
 * @method string                  getCodigo()                  Returns the current record's "codigo" value
 * @method string                  getNombre()                  Returns the current record's "nombre" value
 * @method float                   getStop()                    Returns the current record's "stop" value
 * @method string                  getStatus()                  Returns the current record's "status" value
 * @method integer                 getIdUpdate()                Returns the current record's "id_update" value
 * @method string                  getIpUpdate()                Returns the current record's "ip_update" value
 * @method Inventario_UnidadMedida getInventarioUnidadMedida()  Returns the current record's "Inventario_UnidadMedida" value
 * @method Doctrine_Collection     getInventarioInventario()    Returns the current record's "Inventario_Inventario" collection
 * @method Inventario_Articulo     setId()                      Sets the current record's "id" value
 * @method Inventario_Articulo     setUnidadMedidaId()          Sets the current record's "unidad_medida_id" value
 * @method Inventario_Articulo     setCodigo()                  Sets the current record's "codigo" value
 * @method Inventario_Articulo     setNombre()                  Sets the current record's "nombre" value
 * @method Inventario_Articulo     setStop()                    Sets the current record's "stop" value
 * @method Inventario_Articulo     setStatus()                  Sets the current record's "status" value
 * @method Inventario_Articulo     setIdUpdate()                Sets the current record's "id_update" value
 * @method Inventario_Articulo     setIpUpdate()                Sets the current record's "ip_update" value
 * @method Inventario_Articulo     setInventarioUnidadMedida()  Sets the current record's "Inventario_UnidadMedida" value
 * @method Inventario_Articulo     setInventarioInventario()    Sets the current record's "Inventario_Inventario" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInventario_Articulo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('inventario.articulo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'inventario.articulo_id',
             'length' => 4,
             ));
        $this->hasColumn('unidad_medida_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('codigo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 50,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('stop', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
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
        $this->hasOne('Inventario_UnidadMedida', array(
             'local' => 'unidad_medida_id',
             'foreign' => 'id'));

        $this->hasMany('Inventario_Inventario', array(
             'local' => 'id',
             'foreign' => 'articulo_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}