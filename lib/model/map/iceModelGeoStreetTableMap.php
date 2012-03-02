<?php



/**
 * This class defines the structure of the 'ice_geo_street' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.map
 */
class iceModelGeoStreetTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceGeoLocationPlugin.lib.model.map.iceModelGeoStreetTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('ice_geo_street');
    $this->setPhpName('iceModelGeoStreet');
    $this->setClassname('iceModelGeoStreet');
    $this->setPackage('plugins.iceGeoLocationPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('GEO_REGION_ID', 'GeoRegionId', 'INTEGER', true, null, null);
    $this->addColumn('GEO_CITY_ID', 'GeoCityId', 'INTEGER', true, null, null);
    $this->addColumn('GEO_AREA_ID', 'GeoAreaId', 'INTEGER', true, null, null);
    $this->addColumn('NAME_CYRILLIC', 'NameCyrillic', 'VARCHAR', true, 64, null);
    $this->getColumn('NAME_CYRILLIC', false)->setPrimaryString(true);
    $this->addColumn('NAME_LATIN', 'NameLatin', 'VARCHAR', true, 64, null);
    $this->addColumn('SLUG_CYRILLIC', 'SlugCyrillic', 'VARCHAR', true, 64, null);
    $this->addColumn('SLUG_LATIN', 'SlugLatin', 'VARCHAR', true, 64, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   * 
   * Gets the list of behaviors registered for this table
   * 
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'ice_model' => array(),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
