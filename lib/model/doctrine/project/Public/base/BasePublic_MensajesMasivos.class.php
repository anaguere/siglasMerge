<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_MensajesMasivos', 'doctrine');

/**
 * BasePublic_MensajesMasivos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $variables
 * @property integer $mensajes_id
 * @property integer $destinatarios
 * @property integer $prioridad
 * @property integer $total
 * @property integer $procesados
 * @property integer $cola
 * @property string $status
 * @property string $modem_emisor
 * @property integer $id_update
 * @property Public_Mensajes $Public_Mensajes
 * 
 * @method integer                getId()              Returns the current record's "id" value
 * @method string                 getVariables()       Returns the current record's "variables" value
 * @method integer                getMensajesId()      Returns the current record's "mensajes_id" value
 * @method integer                getDestinatarios()   Returns the current record's "destinatarios" value
 * @method integer                getPrioridad()       Returns the current record's "prioridad" value
 * @method integer                getTotal()           Returns the current record's "total" value
 * @method integer                getProcesados()      Returns the current record's "procesados" value
 * @method integer                getCola()            Returns the current record's "cola" value
 * @method string                 getStatus()          Returns the current record's "status" value
 * @method string                 getModemEmisor()     Returns the current record's "modem_emisor" value
 * @method integer                getIdUpdate()        Returns the current record's "id_update" value
 * @method Public_Mensajes        getPublicMensajes()  Returns the current record's "Public_Mensajes" value
 * @method Public_MensajesMasivos setId()              Sets the current record's "id" value
 * @method Public_MensajesMasivos setVariables()       Sets the current record's "variables" value
 * @method Public_MensajesMasivos setMensajesId()      Sets the current record's "mensajes_id" value
 * @method Public_MensajesMasivos setDestinatarios()   Sets the current record's "destinatarios" value
 * @method Public_MensajesMasivos setPrioridad()       Sets the current record's "prioridad" value
 * @method Public_MensajesMasivos setTotal()           Sets the current record's "total" value
 * @method Public_MensajesMasivos setProcesados()      Sets the current record's "procesados" value
 * @method Public_MensajesMasivos setCola()            Sets the current record's "cola" value
 * @method Public_MensajesMasivos setStatus()          Sets the current record's "status" value
 * @method Public_MensajesMasivos setModemEmisor()     Sets the current record's "modem_emisor" value
 * @method Public_MensajesMasivos setIdUpdate()        Sets the current record's "id_update" value
 * @method Public_MensajesMasivos setPublicMensajes()  Sets the current record's "Public_Mensajes" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_MensajesMasivos extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.mensajes_masivos');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'public.mensajes_masivos_id',
             'length' => 4,
             ));
        $this->hasColumn('variables', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('mensajes_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('destinatarios', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('prioridad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('total', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('procesados', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('cola', 'integer', 4, array(
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
        $this->hasColumn('modem_emisor', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Public_Mensajes', array(
             'local' => 'mensajes_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}