<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Funcionarios_Funcionario', 'doctrine');

/**
 * BaseFuncionarios_Funcionario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $ci
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property date $f_nacimiento
 * @property string $estado_nacimiento_id
 * @property string $sexo
 * @property string $edo_civil
 * @property string $telf_movil
 * @property string $telf_fijo
 * @property boolean $email_validado
 * @property string $email_institucional
 * @property string $email_personal
 * @property string $codigo_validador_email
 * @property string $codigo_validador_telf
 * @property string $status
 * @property integer $id_update
 * @property Public_Estado $Public_Estado
 * @property Doctrine_Collection $Public_MensajesParticipantes
 * @property Doctrine_Collection $Public_MensajesGrupo
 * @property Doctrine_Collection $Correspondencia_FuncionarioUnidad
 * @property Doctrine_Collection $Correspondencia_FuncionarioEmisor
 * @property Doctrine_Collection $Correspondencia_FuncionarioDelegado
 * @property Doctrine_Collection $Correspondencia_FuncionarioCorrelativo
 * @property Correspondencia_UltimaVista $Correspondencia_UltimaVista
 * @property Doctrine_Collection $Correspondencia_MicroForo
 * @property Doctrine_Collection $Correspondencia_CorrespondenciaVistobueno
 * @property Doctrine_Collection $Correspondencia_VistobuenoConfig
 * @property Doctrine_Collection $Correspondencia_VistobuenoGeneral
 * @property Doctrine_Collection $Correspondencia_Receptor
 * @property Doctrine_Collection $Correspondencia_PlantillaFuncionario
 * @property Doctrine_Collection $Funcionarios_FuncionarioCargo
 * @property Doctrine_Collection $Public_MensajesEnvia
 * @property Doctrine_Collection $Public_MensajesRecibe
 * @property Doctrine_Collection $Acceso_AutorizacionModulo
 * @property Doctrine_Collection $Rrhh_Vacaciones
 * @property Doctrine_Collection $Rrhh_Permisos
 * @property Doctrine_Collection $Rrhh_Reposos
 * @property Doctrine_Collection $Public_AmigoFuncionario
 * @property Doctrine_Collection $Public_AmigoFuncionarioAmigo
 * @property Doctrine_Collection $Archivo_PrestamoArchivo
 * @property Doctrine_Collection $Archivo_PrestamoArchivoReceptorEntregaFisico
 * @property Doctrine_Collection $Archivo_PrestamoArchivoReceptorDevolucionFisico
 * @property Doctrine_Collection $Archivo_FuncionarioUnidad
 * @property Doctrine_Collection $Funcionarios_Contacto
 * @property Doctrine_Collection $Funcionarios_IdiomaManejado
 * @property Doctrine_Collection $Funcionarios_EducacionMedia
 * @property Doctrine_Collection $Funcionarios_FuncionarioDiscapacidad
 * @property Doctrine_Collection $Funcionarios_EducacionUniversitaria
 * @property Doctrine_Collection $Vehiculos_ConductorVehiculo
 * @property Doctrine_Collection $Funcionarios_CuentaBancaria
 * @property Doctrine_Collection $Funcionarios_InformacionBasica
 * @property Doctrine_Collection $Funcionarios_FuncionarioEnfermedad
 * @property Doctrine_Collection $Vehiculos_Conductor
 * @property Doctrine_Collection $Funcionarios_Residencia
 * @property Doctrine_Collection $Funcionarios_Familiar
 * @property Doctrine_Collection $Funcionarios_OrigenIndigena
 * @property Doctrine_Collection $Funcionarios_InformacionCorporal
 * @property Doctrine_Collection $Funcionarios_Nacionalidad
 * @property Doctrine_Collection $Funcionarios_Foto
 * @property Doctrine_Collection $Funcionarios_GrupoSocial
 * @property Doctrine_Collection $Funcionarios_EducacionAdicional
 * @property Doctrine_Collection $Seguridad_Ingreso
 * @property Doctrine_Collection $Seguridad_Preingreso
 * @property Doctrine_Collection $Comunicaciones_Tarea
 * @property Doctrine_Collection $Comunicaciones_FuncionarioTarea
 * @property Doctrine_Collection $Public_EventosInvitados
 * @property Doctrine_Collection $Public_Eventos
 * @property Doctrine_Collection $Public_EventosFuncionarioDelegado
 * @property Doctrine_Collection $Archivo_CompartirFuncionario
 * 
 * @method integer                     getId()                                              Returns the current record's "id" value
 * @method integer                     getCi()                                              Returns the current record's "ci" value
 * @method string                      getPrimerNombre()                                    Returns the current record's "primer_nombre" value
 * @method string                      getSegundoNombre()                                   Returns the current record's "segundo_nombre" value
 * @method string                      getPrimerApellido()                                  Returns the current record's "primer_apellido" value
 * @method string                      getSegundoApellido()                                 Returns the current record's "segundo_apellido" value
 * @method date                        getFNacimiento()                                     Returns the current record's "f_nacimiento" value
 * @method string                      getEstadoNacimientoId()                              Returns the current record's "estado_nacimiento_id" value
 * @method string                      getSexo()                                            Returns the current record's "sexo" value
 * @method string                      getEdoCivil()                                        Returns the current record's "edo_civil" value
 * @method string                      getTelfMovil()                                       Returns the current record's "telf_movil" value
 * @method string                      getTelfFijo()                                        Returns the current record's "telf_fijo" value
 * @method boolean                     getEmailValidado()                                   Returns the current record's "email_validado" value
 * @method string                      getEmailInstitucional()                              Returns the current record's "email_institucional" value
 * @method string                      getEmailPersonal()                                   Returns the current record's "email_personal" value
 * @method string                      getCodigoValidadorEmail()                            Returns the current record's "codigo_validador_email" value
 * @method string                      getCodigoValidadorTelf()                             Returns the current record's "codigo_validador_telf" value
 * @method string                      getStatus()                                          Returns the current record's "status" value
 * @method integer                     getIdUpdate()                                        Returns the current record's "id_update" value
 * @method Public_Estado               getPublicEstado()                                    Returns the current record's "Public_Estado" value
 * @method Doctrine_Collection         getPublicMensajesParticipantes()                     Returns the current record's "Public_MensajesParticipantes" collection
 * @method Doctrine_Collection         getPublicMensajesGrupo()                             Returns the current record's "Public_MensajesGrupo" collection
 * @method Doctrine_Collection         getCorrespondenciaFuncionarioUnidad()                Returns the current record's "Correspondencia_FuncionarioUnidad" collection
 * @method Doctrine_Collection         getCorrespondenciaFuncionarioEmisor()                Returns the current record's "Correspondencia_FuncionarioEmisor" collection
 * @method Doctrine_Collection         getCorrespondenciaFuncionarioDelegado()              Returns the current record's "Correspondencia_FuncionarioDelegado" collection
 * @method Doctrine_Collection         getCorrespondenciaFuncionarioCorrelativo()           Returns the current record's "Correspondencia_FuncionarioCorrelativo" collection
 * @method Correspondencia_UltimaVista getCorrespondenciaUltimaVista()                      Returns the current record's "Correspondencia_UltimaVista" value
 * @method Doctrine_Collection         getCorrespondenciaMicroForo()                        Returns the current record's "Correspondencia_MicroForo" collection
 * @method Doctrine_Collection         getCorrespondenciaCorrespondenciaVistobueno()        Returns the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * @method Doctrine_Collection         getCorrespondenciaVistobuenoConfig()                 Returns the current record's "Correspondencia_VistobuenoConfig" collection
 * @method Doctrine_Collection         getCorrespondenciaVistobuenoGeneral()                Returns the current record's "Correspondencia_VistobuenoGeneral" collection
 * @method Doctrine_Collection         getCorrespondenciaReceptor()                         Returns the current record's "Correspondencia_Receptor" collection
 * @method Doctrine_Collection         getCorrespondenciaPlantillaFuncionario()             Returns the current record's "Correspondencia_PlantillaFuncionario" collection
 * @method Doctrine_Collection         getFuncionariosFuncionarioCargo()                    Returns the current record's "Funcionarios_FuncionarioCargo" collection
 * @method Doctrine_Collection         getPublicMensajesEnvia()                             Returns the current record's "Public_MensajesEnvia" collection
 * @method Doctrine_Collection         getPublicMensajesRecibe()                            Returns the current record's "Public_MensajesRecibe" collection
 * @method Doctrine_Collection         getAccesoAutorizacionModulo()                        Returns the current record's "Acceso_AutorizacionModulo" collection
 * @method Doctrine_Collection         getRrhhVacaciones()                                  Returns the current record's "Rrhh_Vacaciones" collection
 * @method Doctrine_Collection         getRrhhPermisos()                                    Returns the current record's "Rrhh_Permisos" collection
 * @method Doctrine_Collection         getRrhhReposos()                                     Returns the current record's "Rrhh_Reposos" collection
 * @method Doctrine_Collection         getPublicAmigoFuncionario()                          Returns the current record's "Public_AmigoFuncionario" collection
 * @method Doctrine_Collection         getPublicAmigoFuncionarioAmigo()                     Returns the current record's "Public_AmigoFuncionarioAmigo" collection
 * @method Doctrine_Collection         getArchivoPrestamoArchivo()                          Returns the current record's "Archivo_PrestamoArchivo" collection
 * @method Doctrine_Collection         getArchivoPrestamoArchivoReceptorEntregaFisico()     Returns the current record's "Archivo_PrestamoArchivoReceptorEntregaFisico" collection
 * @method Doctrine_Collection         getArchivoPrestamoArchivoReceptorDevolucionFisico()  Returns the current record's "Archivo_PrestamoArchivoReceptorDevolucionFisico" collection
 * @method Doctrine_Collection         getArchivoFuncionarioUnidad()                        Returns the current record's "Archivo_FuncionarioUnidad" collection
 * @method Doctrine_Collection         getFuncionariosContacto()                            Returns the current record's "Funcionarios_Contacto" collection
 * @method Doctrine_Collection         getFuncionariosIdiomaManejado()                      Returns the current record's "Funcionarios_IdiomaManejado" collection
 * @method Doctrine_Collection         getFuncionariosEducacionMedia()                      Returns the current record's "Funcionarios_EducacionMedia" collection
 * @method Doctrine_Collection         getFuncionariosFuncionarioDiscapacidad()             Returns the current record's "Funcionarios_FuncionarioDiscapacidad" collection
 * @method Doctrine_Collection         getFuncionariosEducacionUniversitaria()              Returns the current record's "Funcionarios_EducacionUniversitaria" collection
 * @method Doctrine_Collection         getVehiculosConductorVehiculo()                      Returns the current record's "Vehiculos_ConductorVehiculo" collection
 * @method Doctrine_Collection         getFuncionariosCuentaBancaria()                      Returns the current record's "Funcionarios_CuentaBancaria" collection
 * @method Doctrine_Collection         getFuncionariosInformacionBasica()                   Returns the current record's "Funcionarios_InformacionBasica" collection
 * @method Doctrine_Collection         getFuncionariosFuncionarioEnfermedad()               Returns the current record's "Funcionarios_FuncionarioEnfermedad" collection
 * @method Doctrine_Collection         getVehiculosConductor()                              Returns the current record's "Vehiculos_Conductor" collection
 * @method Doctrine_Collection         getFuncionariosResidencia()                          Returns the current record's "Funcionarios_Residencia" collection
 * @method Doctrine_Collection         getFuncionariosFamiliar()                            Returns the current record's "Funcionarios_Familiar" collection
 * @method Doctrine_Collection         getFuncionariosOrigenIndigena()                      Returns the current record's "Funcionarios_OrigenIndigena" collection
 * @method Doctrine_Collection         getFuncionariosInformacionCorporal()                 Returns the current record's "Funcionarios_InformacionCorporal" collection
 * @method Doctrine_Collection         getFuncionariosNacionalidad()                        Returns the current record's "Funcionarios_Nacionalidad" collection
 * @method Doctrine_Collection         getFuncionariosFoto()                                Returns the current record's "Funcionarios_Foto" collection
 * @method Doctrine_Collection         getFuncionariosGrupoSocial()                         Returns the current record's "Funcionarios_GrupoSocial" collection
 * @method Doctrine_Collection         getFuncionariosEducacionAdicional()                  Returns the current record's "Funcionarios_EducacionAdicional" collection
 * @method Doctrine_Collection         getSeguridadIngreso()                                Returns the current record's "Seguridad_Ingreso" collection
 * @method Doctrine_Collection         getSeguridadPreingreso()                             Returns the current record's "Seguridad_Preingreso" collection
 * @method Doctrine_Collection         getComunicacionesTarea()                             Returns the current record's "Comunicaciones_Tarea" collection
 * @method Doctrine_Collection         getComunicacionesFuncionarioTarea()                  Returns the current record's "Comunicaciones_FuncionarioTarea" collection
 * @method Doctrine_Collection         getPublicEventosInvitados()                          Returns the current record's "Public_EventosInvitados" collection
 * @method Doctrine_Collection         getPublicEventos()                                   Returns the current record's "Public_Eventos" collection
 * @method Doctrine_Collection         getPublicEventosFuncionarioDelegado()                Returns the current record's "Public_EventosFuncionarioDelegado" collection
 * @method Doctrine_Collection         getArchivoCompartirFuncionario()                     Returns the current record's "Archivo_CompartirFuncionario" collection
 * @method Funcionarios_Funcionario    setId()                                              Sets the current record's "id" value
 * @method Funcionarios_Funcionario    setCi()                                              Sets the current record's "ci" value
 * @method Funcionarios_Funcionario    setPrimerNombre()                                    Sets the current record's "primer_nombre" value
 * @method Funcionarios_Funcionario    setSegundoNombre()                                   Sets the current record's "segundo_nombre" value
 * @method Funcionarios_Funcionario    setPrimerApellido()                                  Sets the current record's "primer_apellido" value
 * @method Funcionarios_Funcionario    setSegundoApellido()                                 Sets the current record's "segundo_apellido" value
 * @method Funcionarios_Funcionario    setFNacimiento()                                     Sets the current record's "f_nacimiento" value
 * @method Funcionarios_Funcionario    setEstadoNacimientoId()                              Sets the current record's "estado_nacimiento_id" value
 * @method Funcionarios_Funcionario    setSexo()                                            Sets the current record's "sexo" value
 * @method Funcionarios_Funcionario    setEdoCivil()                                        Sets the current record's "edo_civil" value
 * @method Funcionarios_Funcionario    setTelfMovil()                                       Sets the current record's "telf_movil" value
 * @method Funcionarios_Funcionario    setTelfFijo()                                        Sets the current record's "telf_fijo" value
 * @method Funcionarios_Funcionario    setEmailValidado()                                   Sets the current record's "email_validado" value
 * @method Funcionarios_Funcionario    setEmailInstitucional()                              Sets the current record's "email_institucional" value
 * @method Funcionarios_Funcionario    setEmailPersonal()                                   Sets the current record's "email_personal" value
 * @method Funcionarios_Funcionario    setCodigoValidadorEmail()                            Sets the current record's "codigo_validador_email" value
 * @method Funcionarios_Funcionario    setCodigoValidadorTelf()                             Sets the current record's "codigo_validador_telf" value
 * @method Funcionarios_Funcionario    setStatus()                                          Sets the current record's "status" value
 * @method Funcionarios_Funcionario    setIdUpdate()                                        Sets the current record's "id_update" value
 * @method Funcionarios_Funcionario    setPublicEstado()                                    Sets the current record's "Public_Estado" value
 * @method Funcionarios_Funcionario    setPublicMensajesParticipantes()                     Sets the current record's "Public_MensajesParticipantes" collection
 * @method Funcionarios_Funcionario    setPublicMensajesGrupo()                             Sets the current record's "Public_MensajesGrupo" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaFuncionarioUnidad()                Sets the current record's "Correspondencia_FuncionarioUnidad" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaFuncionarioEmisor()                Sets the current record's "Correspondencia_FuncionarioEmisor" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaFuncionarioDelegado()              Sets the current record's "Correspondencia_FuncionarioDelegado" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaFuncionarioCorrelativo()           Sets the current record's "Correspondencia_FuncionarioCorrelativo" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaUltimaVista()                      Sets the current record's "Correspondencia_UltimaVista" value
 * @method Funcionarios_Funcionario    setCorrespondenciaMicroForo()                        Sets the current record's "Correspondencia_MicroForo" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaCorrespondenciaVistobueno()        Sets the current record's "Correspondencia_CorrespondenciaVistobueno" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaVistobuenoConfig()                 Sets the current record's "Correspondencia_VistobuenoConfig" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaVistobuenoGeneral()                Sets the current record's "Correspondencia_VistobuenoGeneral" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaReceptor()                         Sets the current record's "Correspondencia_Receptor" collection
 * @method Funcionarios_Funcionario    setCorrespondenciaPlantillaFuncionario()             Sets the current record's "Correspondencia_PlantillaFuncionario" collection
 * @method Funcionarios_Funcionario    setFuncionariosFuncionarioCargo()                    Sets the current record's "Funcionarios_FuncionarioCargo" collection
 * @method Funcionarios_Funcionario    setPublicMensajesEnvia()                             Sets the current record's "Public_MensajesEnvia" collection
 * @method Funcionarios_Funcionario    setPublicMensajesRecibe()                            Sets the current record's "Public_MensajesRecibe" collection
 * @method Funcionarios_Funcionario    setAccesoAutorizacionModulo()                        Sets the current record's "Acceso_AutorizacionModulo" collection
 * @method Funcionarios_Funcionario    setRrhhVacaciones()                                  Sets the current record's "Rrhh_Vacaciones" collection
 * @method Funcionarios_Funcionario    setRrhhPermisos()                                    Sets the current record's "Rrhh_Permisos" collection
 * @method Funcionarios_Funcionario    setRrhhReposos()                                     Sets the current record's "Rrhh_Reposos" collection
 * @method Funcionarios_Funcionario    setPublicAmigoFuncionario()                          Sets the current record's "Public_AmigoFuncionario" collection
 * @method Funcionarios_Funcionario    setPublicAmigoFuncionarioAmigo()                     Sets the current record's "Public_AmigoFuncionarioAmigo" collection
 * @method Funcionarios_Funcionario    setArchivoPrestamoArchivo()                          Sets the current record's "Archivo_PrestamoArchivo" collection
 * @method Funcionarios_Funcionario    setArchivoPrestamoArchivoReceptorEntregaFisico()     Sets the current record's "Archivo_PrestamoArchivoReceptorEntregaFisico" collection
 * @method Funcionarios_Funcionario    setArchivoPrestamoArchivoReceptorDevolucionFisico()  Sets the current record's "Archivo_PrestamoArchivoReceptorDevolucionFisico" collection
 * @method Funcionarios_Funcionario    setArchivoFuncionarioUnidad()                        Sets the current record's "Archivo_FuncionarioUnidad" collection
 * @method Funcionarios_Funcionario    setFuncionariosContacto()                            Sets the current record's "Funcionarios_Contacto" collection
 * @method Funcionarios_Funcionario    setFuncionariosIdiomaManejado()                      Sets the current record's "Funcionarios_IdiomaManejado" collection
 * @method Funcionarios_Funcionario    setFuncionariosEducacionMedia()                      Sets the current record's "Funcionarios_EducacionMedia" collection
 * @method Funcionarios_Funcionario    setFuncionariosFuncionarioDiscapacidad()             Sets the current record's "Funcionarios_FuncionarioDiscapacidad" collection
 * @method Funcionarios_Funcionario    setFuncionariosEducacionUniversitaria()              Sets the current record's "Funcionarios_EducacionUniversitaria" collection
 * @method Funcionarios_Funcionario    setVehiculosConductorVehiculo()                      Sets the current record's "Vehiculos_ConductorVehiculo" collection
 * @method Funcionarios_Funcionario    setFuncionariosCuentaBancaria()                      Sets the current record's "Funcionarios_CuentaBancaria" collection
 * @method Funcionarios_Funcionario    setFuncionariosInformacionBasica()                   Sets the current record's "Funcionarios_InformacionBasica" collection
 * @method Funcionarios_Funcionario    setFuncionariosFuncionarioEnfermedad()               Sets the current record's "Funcionarios_FuncionarioEnfermedad" collection
 * @method Funcionarios_Funcionario    setVehiculosConductor()                              Sets the current record's "Vehiculos_Conductor" collection
 * @method Funcionarios_Funcionario    setFuncionariosResidencia()                          Sets the current record's "Funcionarios_Residencia" collection
 * @method Funcionarios_Funcionario    setFuncionariosFamiliar()                            Sets the current record's "Funcionarios_Familiar" collection
 * @method Funcionarios_Funcionario    setFuncionariosOrigenIndigena()                      Sets the current record's "Funcionarios_OrigenIndigena" collection
 * @method Funcionarios_Funcionario    setFuncionariosInformacionCorporal()                 Sets the current record's "Funcionarios_InformacionCorporal" collection
 * @method Funcionarios_Funcionario    setFuncionariosNacionalidad()                        Sets the current record's "Funcionarios_Nacionalidad" collection
 * @method Funcionarios_Funcionario    setFuncionariosFoto()                                Sets the current record's "Funcionarios_Foto" collection
 * @method Funcionarios_Funcionario    setFuncionariosGrupoSocial()                         Sets the current record's "Funcionarios_GrupoSocial" collection
 * @method Funcionarios_Funcionario    setFuncionariosEducacionAdicional()                  Sets the current record's "Funcionarios_EducacionAdicional" collection
 * @method Funcionarios_Funcionario    setSeguridadIngreso()                                Sets the current record's "Seguridad_Ingreso" collection
 * @method Funcionarios_Funcionario    setSeguridadPreingreso()                             Sets the current record's "Seguridad_Preingreso" collection
 * @method Funcionarios_Funcionario    setComunicacionesTarea()                             Sets the current record's "Comunicaciones_Tarea" collection
 * @method Funcionarios_Funcionario    setComunicacionesFuncionarioTarea()                  Sets the current record's "Comunicaciones_FuncionarioTarea" collection
 * @method Funcionarios_Funcionario    setPublicEventosInvitados()                          Sets the current record's "Public_EventosInvitados" collection
 * @method Funcionarios_Funcionario    setPublicEventos()                                   Sets the current record's "Public_Eventos" collection
 * @method Funcionarios_Funcionario    setPublicEventosFuncionarioDelegado()                Sets the current record's "Public_EventosFuncionarioDelegado" collection
 * @method Funcionarios_Funcionario    setArchivoCompartirFuncionario()                     Sets the current record's "Archivo_CompartirFuncionario" collection
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFuncionarios_Funcionario extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('funcionarios.funcionario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'funcionarios.funcionario_id',
             'length' => 4,
             ));
        $this->hasColumn('ci', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('primer_nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('segundo_nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('primer_apellido', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('segundo_apellido', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('f_nacimiento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('estado_nacimiento_id', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('sexo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('edo_civil', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('telf_movil', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('telf_fijo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('email_validado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('email_institucional', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('email_personal', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('codigo_validador_email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 255,
             ));
        $this->hasColumn('codigo_validador_telf', 'string', 255, array(
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
        $this->hasOne('Public_Estado', array(
             'local' => 'estado_nacimiento_id',
             'foreign' => 'id'));

        $this->hasMany('Public_MensajesParticipantes', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_MensajesGrupo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_FuncionarioUnidad', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_FuncionarioEmisor', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_FuncionarioEmisor as Correspondencia_FuncionarioDelegado', array(
             'local' => 'id',
             'foreign' => 'funcionario_delegado_id'));

        $this->hasMany('Correspondencia_FuncionarioCorrelativo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasOne('Correspondencia_UltimaVista', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_MicroForo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_CorrespondenciaVistobueno', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_VistobuenoConfig', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_VistobuenoGeneral', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_Receptor', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Correspondencia_PlantillaFuncionario', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_FuncionarioCargo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_Mensajes as Public_MensajesEnvia', array(
             'local' => 'id',
             'foreign' => 'funcionario_envia_id'));

        $this->hasMany('Public_Mensajes as Public_MensajesRecibe', array(
             'local' => 'id',
             'foreign' => 'funcionario_recibe_id'));

        $this->hasMany('Acceso_AutorizacionModulo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Rrhh_Vacaciones', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Rrhh_Permisos', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Rrhh_Reposos', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_Amigo as Public_AmigoFuncionario', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_Amigo as Public_AmigoFuncionarioAmigo', array(
             'local' => 'id',
             'foreign' => 'funcionario_amigo_id'));

        $this->hasMany('Archivo_PrestamoArchivo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Archivo_PrestamoArchivo as Archivo_PrestamoArchivoReceptorEntregaFisico', array(
             'local' => 'id',
             'foreign' => 'receptor_entrega_fisico_id'));

        $this->hasMany('Archivo_PrestamoArchivo as Archivo_PrestamoArchivoReceptorDevolucionFisico', array(
             'local' => 'id',
             'foreign' => 'receptor_devolucion_fisico_id'));

        $this->hasMany('Archivo_FuncionarioUnidad', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_Contacto', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_IdiomaManejado', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_EducacionMedia', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_FuncionarioDiscapacidad', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_EducacionUniversitaria', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Vehiculos_ConductorVehiculo', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_CuentaBancaria', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_InformacionBasica', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_FuncionarioEnfermedad', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Vehiculos_Conductor', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_Residencia', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_Familiar', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_OrigenIndigena', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_InformacionCorporal', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_Nacionalidad', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_Foto', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_GrupoSocial', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Funcionarios_EducacionAdicional', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Seguridad_Ingreso', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Seguridad_Preingreso', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Comunicaciones_Tarea', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Comunicaciones_FuncionarioTarea', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_EventosInvitados', array(
             'local' => 'id',
             'foreign' => 'funcionario_invitado_id'));

        $this->hasMany('Public_Eventos', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $this->hasMany('Public_Eventos as Public_EventosFuncionarioDelegado', array(
             'local' => 'id',
             'foreign' => 'funcionario_delegado_id'));

        $this->hasMany('Archivo_CompartirFuncionario', array(
             'local' => 'id',
             'foreign' => 'funcionario_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}