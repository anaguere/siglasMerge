<?php

/**
 * Archivo_ExpedienteEtiqueta filter form base class.
 *
 * @package    siglas
 * @subpackage filter
 * @author     Livio Lopez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArchivo_ExpedienteEtiquetaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'expediente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Archivo_Expediente'), 'add_empty' => true)),
      'etiqueta_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Archivo_Etiqueta'), 'add_empty' => true)),
      'valor'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_update'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'expediente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Archivo_Expediente'), 'column' => 'id')),
      'etiqueta_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Archivo_Etiqueta'), 'column' => 'id')),
      'valor'         => new sfValidatorPass(array('required' => false)),
      'id_update'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('archivo_expediente_etiqueta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Archivo_ExpedienteEtiqueta';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'expediente_id' => 'ForeignKey',
      'etiqueta_id'   => 'ForeignKey',
      'valor'         => 'Text',
      'id_update'     => 'Number',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
