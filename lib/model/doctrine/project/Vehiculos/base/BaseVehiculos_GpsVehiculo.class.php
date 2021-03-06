<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Vehiculos_GpsVehiculo', 'doctrine');

/**
 * BaseVehiculos_GpsVehiculo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $vehiculo_id
 * @property integer $gps_id
 * @property integer $operador_id
 * @property string $icono
 * @property string $color_icon
 * @property string $status
 * @property decimal $clave
 * @property decimal $imei
 * @property decimal $sim
 * @property decimal $numero_uno
 * @property decimal $numero_dos
 * @property decimal $numero_tres
 * @property decimal $numero_cuatro
 * @property decimal $numero_cinco
 * @property string $alerta_parametro
 * @property integer $id_update
 * @property integer $id_create
 * @property string $ip_update
 * @property string $ip_create
 * @property Vehiculos_Gps $Vehiculos_Gps
 * @property Comunicaciones_Operador $Comunicaciones_Operador
 * @property Vehiculos_Vehiculo $Vehiculos_Vehiculo
 * @property Doctrine_Collection $Vehiculos_Tracker
 * @property Doctrine_Collection $Vehiculos_GpsVehiculoAlerta
 * 
 * @method integer                 getId()                          Returns the current record's "id" value
 * @method integer                 getVehiculoId()                  Returns the current record's "vehiculo_id" value
 * @method integer                 getGpsId()                       Returns the current record's "gps_id" value
 * @method integer                 getOperadorId()                  Returns the current record's "operador_id" value
 * @method string                  getIcono()                       Returns the current record's "icono" value
 * @method string                  getColorIcon()                   Returns the current record's "color_icon" value
 * @method string                  getStatus()                      Returns the current record's "status" value
 * @method decimal                 getClave()                       Returns the current record's "clave" value
 * @method decimal                 getImei()                        Returns the current record's "imei" value
 * @method decimal                 getSim()                         Returns the current record's "sim" value
 * @method decimal                 getNumeroUno()                   Returns the current record's "numero_uno" value
 * @method decimal                 getNumeroDos()                   Returns the current record's "numero_dos" value
 * @method decimal                 getNumeroTres()                  Returns the current record's "numero_tres" value
 * @method decimal                 getNumeroCuatro()                Returns the current record's "numero_cuatro" value
 * @method decimal                 getNumeroCinco()                 Returns the current record's "numero_cinco" value
 * @method string                  getAlertaParametro()             Returns the current record's "alerta_parametro" value
 * @method integer                 getIdUpdate()                    Returns the current record's "id_update" value
 * @method integer                 getIdCreate()                    Returns the current record's "id_create" value
 * @method string                  getIpUpdate()                    Returns the current record's "ip_update" value
 * @method string                  getIpCreate()                    Returns the current record's "ip_create" value
 * @method Vehiculos_Gps           getVehiculosGps()                Returns the current record's "Vehiculos_Gps" value
 * @method Comunicaciones_Operador getComunicacionesOperador()      Returns the current record's "Comunicaciones_Operador" value
 * @method Vehiculos_Vehiculo      getVehiculosVehiculo()           Returns the current record's "Vehiculos_Vehiculo" value
 * @method Doctrine_Collection     getVehiculosTracker()            Returns the current record's "Vehiculos_Tracker" collection
 * @method Doctrine_Collection     getVehiculosGpsVehiculoAlerta()  Returns the current record's "Vehiculos_GpsVehiculoAlerta" collection
 * @method Vehiculos_GpsVehiculo   setId()                          Sets the current record's "id" value
 * @method Vehiculos_GpsVehiculo   setVehiculoId()                  Sets the current record's "vehiculo_id" value
 * @method Vehiculos_GpsVehiculo   setGpsId()                       Sets the current record's "gps_id" value
 * @method Vehiculos_GpsVehiculo   setOperadorId()                  Sets the current record's "operador_id" value
 * @method Vehiculos_GpsVehiculo   setIcono()                       Sets the current record's "icono" value
 * @method Vehiculos_GpsVehiculo   setColorIcon()                   Sets the current record's "color_icon" value
 * @method Vehiculos_GpsVehiculo   setStatus()                      Sets the current record's "status" value
 * @method Vehiculos_GpsVehiculo   setClave()                       Sets the current record's "clave" value
 * @method Vehiculos_GpsVehiculo   setImei()                        Sets the current record's "imei" value
 * @method Vehiculos_GpsVehiculo   setSim()                         Sets the current record's "sim" value
 * @method Vehiculos_GpsVehiculo   setNumeroUno()                   Sets the current record's "numero_uno" value
 * @method Vehiculos_GpsVehiculo   setNumeroDos()                   Sets the current record's "numero_dos" value
 * @method Vehiculos_GpsVehiculo   setNumeroTres()                  Sets the current record's "numero_tres" value
 * @method Vehiculos_GpsVehiculo   setNumeroCuatro()                Sets the current record's "numero_cuatro" value
 * @method Vehiculos_GpsVehiculo   setNumeroCinco()                 Sets the current record's "numero_cinco" value
 * @method Vehiculos_GpsVehiculo   setAlertaParametro()             Sets the current record's "alerta_parametro" value
 * @method Vehiculos_GpsVehiculo   setIdUpdate()                    Sets the current record's "id_update" value
 * @method Vehiculos_GpsVehiculo   setIdCreate()                    Sets the current record's "id_create" value
 * @method Vehiculos_GpsVehiculo   setIpUpdate()                    Sets the current record's "ip_update" value
 * @method Vehiculos_GpsVehiculo   setIpCreate()                    Sets the current record's "ip_create" value
 * @method Vehiculos_GpsVehiculo   setVehiculosGps()                Sets the current record's "Vehiculos_Gps" value
 * @method Vehiculos_GpsVehiculo   setComunicacionesOperador()      Sets the current record's "Comunicaciones_Operador" value
 * @method Vehiculos_GpsVehiculo   setVehiculosVehiculo()           Sets the current record's "Vehiculos_Vehiculo" value
 * @method Vehiculos_GpsVehiculo   setVehiculosTracker()            Sets the current record's "Vehiculos_Tracker" collection
 * @method Vehiculos_GpsVehiculo   setVehiculosGpsVehiculoAlerta()  Sets the current record's "Vehiculos_GpsVehiculoAlerta" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehiculos_GpsVehiculo extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehiculos.gps_vehiculo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'vehiculos.gps_vehiculo_id',
             'length' => 4,
             ));
        $this->hasColumn('vehiculo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('gps_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('operador_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('icono', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => 'default.png',
             'primary' => false,
             'length' => 50,
             ));
        $this->hasColumn('color_icon', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 50,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('clave', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('imei', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('sim', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('numero_uno', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('numero_dos', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('numero_tres', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('numero_cuatro', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('numero_cinco', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 18,
             ));
        $this->hasColumn('alerta_parametro', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_create', 'integer', 4, array(
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
        $this->hasColumn('ip_create', 'string', 50, array(
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
        $this->hasOne('Vehiculos_Gps', array(
             'local' => 'gps_id',
             'foreign' => 'id'));

        $this->hasOne('Comunicaciones_Operador', array(
             'local' => 'operador_id',
             'foreign' => 'id'));

        $this->hasOne('Vehiculos_Vehiculo', array(
             'local' => 'vehiculo_id',
             'foreign' => 'id'));

        $this->hasMany('Vehiculos_Tracker', array(
             'local' => 'id',
             'foreign' => 'gps_vehiculo_id'));

        $this->hasMany('Vehiculos_GpsVehiculoAlerta', array(
             'local' => 'id',
             'foreign' => 'gps_vehiculo_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}