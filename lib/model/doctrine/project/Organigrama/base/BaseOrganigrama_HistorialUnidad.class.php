<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Organigrama_HistorialUnidad', 'doctrine');

/**
 * BaseOrganigrama_HistorialUnidad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $unidad_id
 * @property integer $padre_id
 * @property string $status
 * @property integer $id_update
 * 
 * @method integer                     getId()        Returns the current record's "id" value
 * @method integer                     getUnidadId()  Returns the current record's "unidad_id" value
 * @method integer                     getPadreId()   Returns the current record's "padre_id" value
 * @method string                      getStatus()    Returns the current record's "status" value
 * @method integer                     getIdUpdate()  Returns the current record's "id_update" value
 * @method Organigrama_HistorialUnidad setId()        Sets the current record's "id" value
 * @method Organigrama_HistorialUnidad setUnidadId()  Sets the current record's "unidad_id" value
 * @method Organigrama_HistorialUnidad setPadreId()   Sets the current record's "padre_id" value
 * @method Organigrama_HistorialUnidad setStatus()    Sets the current record's "status" value
 * @method Organigrama_HistorialUnidad setIdUpdate()  Sets the current record's "id_update" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrganigrama_HistorialUnidad extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('organigrama.historial_unidad');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'organigrama.historial_unidad_id',
             'length' => 4,
             ));
        $this->hasColumn('unidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('padre_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
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
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}