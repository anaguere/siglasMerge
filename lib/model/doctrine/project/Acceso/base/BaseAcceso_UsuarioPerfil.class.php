<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acceso_UsuarioPerfil', 'doctrine');

/**
 * BaseAcceso_UsuarioPerfil
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuario_id
 * @property integer $perfil_id
 * @property string $status
 * @property integer $id_update
 * @property integer $id
 * @property Acceso_Perfil $Acceso_Perfil
 * @property Acceso_Usuario $Acceso_Usuario
 * 
 * @method integer              getUsuarioId()      Returns the current record's "usuario_id" value
 * @method integer              getPerfilId()       Returns the current record's "perfil_id" value
 * @method string               getStatus()         Returns the current record's "status" value
 * @method integer              getIdUpdate()       Returns the current record's "id_update" value
 * @method integer              getId()             Returns the current record's "id" value
 * @method Acceso_Perfil        getAccesoPerfil()   Returns the current record's "Acceso_Perfil" value
 * @method Acceso_Usuario       getAccesoUsuario()  Returns the current record's "Acceso_Usuario" value
 * @method Acceso_UsuarioPerfil setUsuarioId()      Sets the current record's "usuario_id" value
 * @method Acceso_UsuarioPerfil setPerfilId()       Sets the current record's "perfil_id" value
 * @method Acceso_UsuarioPerfil setStatus()         Sets the current record's "status" value
 * @method Acceso_UsuarioPerfil setIdUpdate()       Sets the current record's "id_update" value
 * @method Acceso_UsuarioPerfil setId()             Sets the current record's "id" value
 * @method Acceso_UsuarioPerfil setAccesoPerfil()   Sets the current record's "Acceso_Perfil" value
 * @method Acceso_UsuarioPerfil setAccesoUsuario()  Sets the current record's "Acceso_Usuario" value
 * 
 * @package    siglas
 * @subpackage model
 * @author     Livio Lopez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcceso_UsuarioPerfil extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acceso.usuario_perfil');
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('perfil_id', 'integer', 4, array(
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
        $this->hasColumn('id_update', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'acceso.usuario_perfil_id',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Acceso_Perfil', array(
             'local' => 'perfil_id',
             'foreign' => 'id'));

        $this->hasOne('Acceso_Usuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}