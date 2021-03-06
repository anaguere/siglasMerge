<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acceso_Modulo', 'doctrine');

/**
 * BaseAcceso_Modulo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $vinculo
 * @property string $imagen
 * @property integer $orden
 * @property string $status
 * @property integer $id_update
 * @property string $aplicacion
 * @property Doctrine_Collection $Acceso_ModuloPerfil
 * @property Doctrine_Collection $Acceso_AutorizacionModulo
 * 
 * @method integer             getId()                        Returns the current record's "id" value
 * @method string              getNombre()                    Returns the current record's "nombre" value
 * @method string              getDescripcion()               Returns the current record's "descripcion" value
 * @method string              getVinculo()                   Returns the current record's "vinculo" value
 * @method string              getImagen()                    Returns the current record's "imagen" value
 * @method integer             getOrden()                     Returns the current record's "orden" value
 * @method string              getStatus()                    Returns the current record's "status" value
 * @method integer             getIdUpdate()                  Returns the current record's "id_update" value
 * @method string              getAplicacion()                Returns the current record's "aplicacion" value
 * @method Doctrine_Collection getAccesoModuloPerfil()        Returns the current record's "Acceso_ModuloPerfil" collection
 * @method Doctrine_Collection getAccesoAutorizacionModulo()  Returns the current record's "Acceso_AutorizacionModulo" collection
 * @method Acceso_Modulo       setId()                        Sets the current record's "id" value
 * @method Acceso_Modulo       setNombre()                    Sets the current record's "nombre" value
 * @method Acceso_Modulo       setDescripcion()               Sets the current record's "descripcion" value
 * @method Acceso_Modulo       setVinculo()                   Sets the current record's "vinculo" value
 * @method Acceso_Modulo       setImagen()                    Sets the current record's "imagen" value
 * @method Acceso_Modulo       setOrden()                     Sets the current record's "orden" value
 * @method Acceso_Modulo       setStatus()                    Sets the current record's "status" value
 * @method Acceso_Modulo       setIdUpdate()                  Sets the current record's "id_update" value
 * @method Acceso_Modulo       setAplicacion()                Sets the current record's "aplicacion" value
 * @method Acceso_Modulo       setAccesoModuloPerfil()        Sets the current record's "Acceso_ModuloPerfil" collection
 * @method Acceso_Modulo       setAccesoAutorizacionModulo()  Sets the current record's "Acceso_AutorizacionModulo" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcceso_Modulo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acceso.modulo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'acceso.modulo_id',
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('vinculo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('imagen', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('orden', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
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
        $this->hasColumn('aplicacion', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Acceso_ModuloPerfil', array(
             'local' => 'id',
             'foreign' => 'modulo_id'));

        $this->hasMany('Acceso_AutorizacionModulo', array(
             'local' => 'id',
             'foreign' => 'modulo_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}