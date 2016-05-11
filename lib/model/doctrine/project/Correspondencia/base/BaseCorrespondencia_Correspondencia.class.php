<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Correspondencia_Correspondencia', 'doctrine');

/**
 * BaseCorrespondencia_Correspondencia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $padre_id
 * @property integer $grupo_correspondencia
 * @property string $n_correspondencia_emisor
 * @property string $n_correspondencia_externa
 * @property integer $emisor_unidad_id
 * @property integer $emisor_organismo_id
 * @property timestamp $f_envio
 * @property string $privado
 * @property string $tipo_traslado_externo
 * @property string $empresa_traslado
 * @property string $n_guia_traslado
 * @property string $status
 * @property integer $id_create
 * @property integer $id_update
 * @property integer $id_delete
 * @property integer $unidad_correlativo_id
 * @property integer $funcionario_correlativo_id
 * @property string $email_externo
 * @property integer $emisor_persona_id
 * @property integer $emisor_persona_cargo_id
 * @property string $telf_movil_externo
 * @property string $telf_local_externo
 * @property string $prioridad
 * @property integer $editado
 * @property integer $interoperabilidad_enviada_id
 * @property integer $interoperabilidad_recibida_id
 * @property Correspondencia_UnidadCorrelativo $Correspondencia_UnidadCorrelativo
 * @property Correspondencia_FuncionarioCorrelativo $Correspondencia_FuncionarioCorrelativo
 * @property Doctrine_Collection $Correspondencia_CorrespondenciaVistobueno
 * @property Organigrama_Unidad $Organigrama_Unidad
 * @property Organismos_Organismo $Organismos_Organismo
 * @property Organismos_Persona $Organismos_Persona
 * @property Organismos_PersonaCargo $Organismos_PersonaCargo
 * @property Doctrine_Collection $Correspondencia_FuncionarioEmisor
 * @property Doctrine_Collection $Correspondencia_AnexoArchivo
 * @property Doctrine_Collection $Correspondencia_Receptor
 * @property Doctrine_Collection $Correspondencia_AnexoFisico
 * @property Doctrine_Collection $Correspondencia_Formato
 * @property Doctrine_Collection $Correspondencia_UltimaVistaRecibida
 * @property Doctrine_Collection $Correspondencia_UltimaVistaEnviada
 * @property Doctrine_Collection $Correspondencia_UltimaVistaExterna
 * @property Doctrine_Collection $Archivo_Documento
 * @property Doctrine_Collection $Inventario_ArticuloEgresoSolicitud
 * @property Doctrine_Collection $Inventario_ArticuloEgresoAprobacion
 * @property Doctrine_Collection $Correspondencia_ReceptorOrganismo
 * @property Siglas_InteroperabilidadEnviada $Siglas_InteroperabilidadEnviada
 * @property Siglas_InteroperabilidadRecibida $Siglas_InteroperabilidadRecibida
 * 
 * @method integer                                getId()                                        Returns the current record's "id" value
 * @method integer                                getPadreId()                                   Returns the current record's "padre_id" value
 * @method integer                                getGrupoCorrespondencia()                      Returns the current record's "grupo_correspondencia" value
 * @method string                                 getNCorrespondenciaEmisor()                    Returns the current record's "n_correspondencia_emisor" value
 * @method string                                 getNCorrespondenciaExterna()                   Returns the current record's "n_correspondencia_externa" value
 * @method integer                                getEmisorUnidadId()                            Returns the current record's "emisor_unidad_id" value
 * @method integer                                getEmisorOrganismoId()                         Returns the current record's "emisor_organismo_id" value
 * @method timestamp                              getFEnvio()                                    Returns the current record's "f_envio" value
 * @method string                                 getPrivado()                                   Returns the current record's "privado" value
 * @method string                                 getTipoTrasladoExterno()                       Returns the current record's "tipo_traslado_externo" value
 * @method string                                 getEmpresaTraslado()                           Returns the current record's "empresa_traslado" value
 * @method string                                 getNGuiaTraslado()                             Returns the current record's "n_guia_traslado" value
 * @method string                                 getStatus()                                    Returns the current record's "status" value
 * @method integer                                getIdCreate()                                  Returns the current record's "id_create" value
 * @method integer                                getIdUpdate()                                  Returns the current record's "id_update" value
 * @method integer                                getIdDelete()                                  Returns the current record's "id_delete" value
 * @method integer                                getUnidadCorrelativoId()                       Returns the current record's "unidad_correlativo_id" value
 * @method integer                                getFuncionarioCorrelativoId()                  Returns the current record's "funcionario_correlativo_id" value
 * @method string                                 getEmailExterno()                              Returns the current record's "email_externo" value
 * @method integer                                getEmisorPersonaId()                           Returns the current record's "emisor_persona_id" value
 * @method integer                                getEmisorPersonaCargoId()                      Returns the current record's "emisor_persona_cargo_id" value
 * @method string                                 getTelfMovilExterno()                          Returns the current record's "telf_movil_externo" value
 * @method string                                 getTelfLocalExterno()                          Returns the current record's "telf_local_externo" value
 * @method string                                 getPrioridad()                                 Returns the current record's "prioridad" value
 * @method integer                                getEditado()                                   Returns the current record's "editado" value
 * @method integer                                getInteroperabilidadEnviadaId()                Returns the current record's "interoperabilidad_enviada_id" value
 * @method integer                                getInteroperabilidadRecibidaId()               Returns the current record's "interoperabilidad_recibida_id" value
 * @method Correspondencia_UnidadCorrelativo      getCorrespondenciaUnidadCorrelativo()          Returns the current record's "Correspondencia_UnidadCorrelativo" value
 * @method Correspondencia_FuncionarioCorrelativo getCorrespondenciaFuncionarioCorrelativo()     Returns the current record's "Correspondencia_FuncionarioCorrelativo" value
 * @method Doctrine_Collection                    getCorrespondenciaCorrespondenciaVistobueno()  Returns the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * @method Organigrama_Unidad                     getOrganigramaUnidad()                         Returns the current record's "Organigrama_Unidad" value
 * @method Organismos_Organismo                   getOrganismosOrganismo()                       Returns the current record's "Organismos_Organismo" value
 * @method Organismos_Persona                     getOrganismosPersona()                         Returns the current record's "Organismos_Persona" value
 * @method Organismos_PersonaCargo                getOrganismosPersonaCargo()                    Returns the current record's "Organismos_PersonaCargo" value
 * @method Doctrine_Collection                    getCorrespondenciaFuncionarioEmisor()          Returns the current record's "Correspondencia_FuncionarioEmisor" collection
 * @method Doctrine_Collection                    getCorrespondenciaAnexoArchivo()               Returns the current record's "Correspondencia_AnexoArchivo" collection
 * @method Doctrine_Collection                    getCorrespondenciaReceptor()                   Returns the current record's "Correspondencia_Receptor" collection
 * @method Doctrine_Collection                    getCorrespondenciaAnexoFisico()                Returns the current record's "Correspondencia_AnexoFisico" collection
 * @method Doctrine_Collection                    getCorrespondenciaFormato()                    Returns the current record's "Correspondencia_Formato" collection
 * @method Doctrine_Collection                    getCorrespondenciaUltimaVistaRecibida()        Returns the current record's "Correspondencia_UltimaVistaRecibida" collection
 * @method Doctrine_Collection                    getCorrespondenciaUltimaVistaEnviada()         Returns the current record's "Correspondencia_UltimaVistaEnviada" collection
 * @method Doctrine_Collection                    getCorrespondenciaUltimaVistaExterna()         Returns the current record's "Correspondencia_UltimaVistaExterna" collection
 * @method Doctrine_Collection                    getArchivoDocumento()                          Returns the current record's "Archivo_Documento" collection
 * @method Doctrine_Collection                    getInventarioArticuloEgresoSolicitud()         Returns the current record's "Inventario_ArticuloEgresoSolicitud" collection
 * @method Doctrine_Collection                    getInventarioArticuloEgresoAprobacion()        Returns the current record's "Inventario_ArticuloEgresoAprobacion" collection
 * @method Doctrine_Collection                    getCorrespondenciaReceptorOrganismo()          Returns the current record's "Correspondencia_ReceptorOrganismo" collection
 * @method Siglas_InteroperabilidadEnviada        getSiglasInteroperabilidadEnviada()            Returns the current record's "Siglas_InteroperabilidadEnviada" value
 * @method Siglas_InteroperabilidadRecibida       getSiglasInteroperabilidadRecibida()           Returns the current record's "Siglas_InteroperabilidadRecibida" value
 * @method Correspondencia_Correspondencia        setId()                                        Sets the current record's "id" value
 * @method Correspondencia_Correspondencia        setPadreId()                                   Sets the current record's "padre_id" value
 * @method Correspondencia_Correspondencia        setGrupoCorrespondencia()                      Sets the current record's "grupo_correspondencia" value
 * @method Correspondencia_Correspondencia        setNCorrespondenciaEmisor()                    Sets the current record's "n_correspondencia_emisor" value
 * @method Correspondencia_Correspondencia        setNCorrespondenciaExterna()                   Sets the current record's "n_correspondencia_externa" value
 * @method Correspondencia_Correspondencia        setEmisorUnidadId()                            Sets the current record's "emisor_unidad_id" value
 * @method Correspondencia_Correspondencia        setEmisorOrganismoId()                         Sets the current record's "emisor_organismo_id" value
 * @method Correspondencia_Correspondencia        setFEnvio()                                    Sets the current record's "f_envio" value
 * @method Correspondencia_Correspondencia        setPrivado()                                   Sets the current record's "privado" value
 * @method Correspondencia_Correspondencia        setTipoTrasladoExterno()                       Sets the current record's "tipo_traslado_externo" value
 * @method Correspondencia_Correspondencia        setEmpresaTraslado()                           Sets the current record's "empresa_traslado" value
 * @method Correspondencia_Correspondencia        setNGuiaTraslado()                             Sets the current record's "n_guia_traslado" value
 * @method Correspondencia_Correspondencia        setStatus()                                    Sets the current record's "status" value
 * @method Correspondencia_Correspondencia        setIdCreate()                                  Sets the current record's "id_create" value
 * @method Correspondencia_Correspondencia        setIdUpdate()                                  Sets the current record's "id_update" value
 * @method Correspondencia_Correspondencia        setIdDelete()                                  Sets the current record's "id_delete" value
 * @method Correspondencia_Correspondencia        setUnidadCorrelativoId()                       Sets the current record's "unidad_correlativo_id" value
 * @method Correspondencia_Correspondencia        setFuncionarioCorrelativoId()                  Sets the current record's "funcionario_correlativo_id" value
 * @method Correspondencia_Correspondencia        setEmailExterno()                              Sets the current record's "email_externo" value
 * @method Correspondencia_Correspondencia        setEmisorPersonaId()                           Sets the current record's "emisor_persona_id" value
 * @method Correspondencia_Correspondencia        setEmisorPersonaCargoId()                      Sets the current record's "emisor_persona_cargo_id" value
 * @method Correspondencia_Correspondencia        setTelfMovilExterno()                          Sets the current record's "telf_movil_externo" value
 * @method Correspondencia_Correspondencia        setTelfLocalExterno()                          Sets the current record's "telf_local_externo" value
 * @method Correspondencia_Correspondencia        setPrioridad()                                 Sets the current record's "prioridad" value
 * @method Correspondencia_Correspondencia        setEditado()                                   Sets the current record's "editado" value
 * @method Correspondencia_Correspondencia        setInteroperabilidadEnviadaId()                Sets the current record's "interoperabilidad_enviada_id" value
 * @method Correspondencia_Correspondencia        setInteroperabilidadRecibidaId()               Sets the current record's "interoperabilidad_recibida_id" value
 * @method Correspondencia_Correspondencia        setCorrespondenciaUnidadCorrelativo()          Sets the current record's "Correspondencia_UnidadCorrelativo" value
 * @method Correspondencia_Correspondencia        setCorrespondenciaFuncionarioCorrelativo()     Sets the current record's "Correspondencia_FuncionarioCorrelativo" value
 * @method Correspondencia_Correspondencia        setCorrespondenciaCorrespondenciaVistobueno()  Sets the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * @method Correspondencia_Correspondencia        setOrganigramaUnidad()                         Sets the current record's "Organigrama_Unidad" value
 * @method Correspondencia_Correspondencia        setOrganismosOrganismo()                       Sets the current record's "Organismos_Organismo" value
 * @method Correspondencia_Correspondencia        setOrganismosPersona()                         Sets the current record's "Organismos_Persona" value
 * @method Correspondencia_Correspondencia        setOrganismosPersonaCargo()                    Sets the current record's "Organismos_PersonaCargo" value
 * @method Correspondencia_Correspondencia        setCorrespondenciaFuncionarioEmisor()          Sets the current record's "Correspondencia_FuncionarioEmisor" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaAnexoArchivo()               Sets the current record's "Correspondencia_AnexoArchivo" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaReceptor()                   Sets the current record's "Correspondencia_Receptor" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaAnexoFisico()                Sets the current record's "Correspondencia_AnexoFisico" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaFormato()                    Sets the current record's "Correspondencia_Formato" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaUltimaVistaRecibida()        Sets the current record's "Correspondencia_UltimaVistaRecibida" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaUltimaVistaEnviada()         Sets the current record's "Correspondencia_UltimaVistaEnviada" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaUltimaVistaExterna()         Sets the current record's "Correspondencia_UltimaVistaExterna" collection
 * @method Correspondencia_Correspondencia        setArchivoDocumento()                          Sets the current record's "Archivo_Documento" collection
 * @method Correspondencia_Correspondencia        setInventarioArticuloEgresoSolicitud()         Sets the current record's "Inventario_ArticuloEgresoSolicitud" collection
 * @method Correspondencia_Correspondencia        setInventarioArticuloEgresoAprobacion()        Sets the current record's "Inventario_ArticuloEgresoAprobacion" collection
 * @method Correspondencia_Correspondencia        setCorrespondenciaReceptorOrganismo()          Sets the current record's "Correspondencia_ReceptorOrganismo" collection
 * @method Correspondencia_Correspondencia        setSiglasInteroperabilidadEnviada()            Sets the current record's "Siglas_InteroperabilidadEnviada" value
 * @method Correspondencia_Correspondencia        setSiglasInteroperabilidadRecibida()           Sets the current record's "Siglas_InteroperabilidadRecibida" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorrespondencia_Correspondencia extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('correspondencia.correspondencia');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'correspondencia.correspondencia_id',
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
        $this->hasColumn('grupo_correspondencia', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('n_correspondencia_emisor', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('n_correspondencia_externa', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('emisor_unidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('emisor_organismo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('f_envio', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('privado', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('tipo_traslado_externo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('empresa_traslado', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('n_guia_traslado', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('id_create', 'integer', 4, array(
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
        $this->hasColumn('id_delete', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('unidad_correlativo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('funcionario_correlativo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('email_externo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('emisor_persona_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('emisor_persona_cargo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('telf_movil_externo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('telf_local_externo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('prioridad', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('editado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('interoperabilidad_enviada_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('interoperabilidad_recibida_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Correspondencia_UnidadCorrelativo', array(
             'local' => 'unidad_correlativo_id',
             'foreign' => 'id'));

        $this->hasOne('Correspondencia_FuncionarioCorrelativo', array(
             'local' => 'funcionario_correlativo_id',
             'foreign' => 'id'));

        $this->hasMany('Correspondencia_CorrespondenciaVistobueno', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasOne('Organigrama_Unidad', array(
             'local' => 'emisor_unidad_id',
             'foreign' => 'id'));

        $this->hasOne('Organismos_Organismo', array(
             'local' => 'emisor_organismo_id',
             'foreign' => 'id'));

        $this->hasOne('Organismos_Persona', array(
             'local' => 'emisor_persona_id',
             'foreign' => 'id'));

        $this->hasOne('Organismos_PersonaCargo', array(
             'local' => 'emisor_persona_cargo_id',
             'foreign' => 'id'));

        $this->hasMany('Correspondencia_FuncionarioEmisor', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Correspondencia_AnexoArchivo', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Correspondencia_Receptor', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Correspondencia_AnexoFisico', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Correspondencia_Formato', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Correspondencia_UltimaVista as Correspondencia_UltimaVistaRecibida', array(
             'local' => 'id',
             'foreign' => 'correspondencia_recibida_id'));

        $this->hasMany('Correspondencia_UltimaVista as Correspondencia_UltimaVistaEnviada', array(
             'local' => 'id',
             'foreign' => 'correspondencia_enviada_id'));

        $this->hasMany('Correspondencia_UltimaVista as Correspondencia_UltimaVistaExterna', array(
             'local' => 'id',
             'foreign' => 'correspondencia_externa_id'));

        $this->hasMany('Archivo_Documento', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasMany('Inventario_ArticuloEgreso as Inventario_ArticuloEgresoSolicitud', array(
             'local' => 'id',
             'foreign' => 'correspondencia_solicitud_id'));

        $this->hasMany('Inventario_ArticuloEgreso as Inventario_ArticuloEgresoAprobacion', array(
             'local' => 'id',
             'foreign' => 'correspondencia_aprobacion_id'));

        $this->hasMany('Correspondencia_ReceptorOrganismo', array(
             'local' => 'id',
             'foreign' => 'correspondencia_id'));

        $this->hasOne('Siglas_InteroperabilidadEnviada', array(
             'local' => 'interoperabilidad_enviada_id',
             'foreign' => 'id'));

        $this->hasOne('Siglas_InteroperabilidadRecibida', array(
             'local' => 'interoperabilidad_recibida_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}