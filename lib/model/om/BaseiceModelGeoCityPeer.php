<?php


/**
 * Base static class for performing query and update operations on the 'ice_geo_city' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceGeoLocationPlugin.lib.model.om
 */
abstract class BaseiceModelGeoCityPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'ice_geo_city';

  /** the related Propel class for this table */
  const OM_CLASS = 'iceModelGeoCity';

  /** the related TableMap class for this table */
  const TM_CLASS = 'iceModelGeoCityTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 11;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 11;

  /** the column name for the ID field */
  const ID = 'ice_geo_city.ID';

  /** the column name for the GEO_REGION_ID field */
  const GEO_REGION_ID = 'ice_geo_city.GEO_REGION_ID';

  /** the column name for the TYPE field */
  const TYPE = 'ice_geo_city.TYPE';

  /** the column name for the NAME_CYRILLIC field */
  const NAME_CYRILLIC = 'ice_geo_city.NAME_CYRILLIC';

  /** the column name for the NAME_LATIN field */
  const NAME_LATIN = 'ice_geo_city.NAME_LATIN';

  /** the column name for the SLUG_CYRILLIC field */
  const SLUG_CYRILLIC = 'ice_geo_city.SLUG_CYRILLIC';

  /** the column name for the SLUG_LATIN field */
  const SLUG_LATIN = 'ice_geo_city.SLUG_LATIN';

  /** the column name for the LATITUDE field */
  const LATITUDE = 'ice_geo_city.LATITUDE';

  /** the column name for the LONGITUDE field */
  const LONGITUDE = 'ice_geo_city.LONGITUDE';

  /** the column name for the POSTAL_CODE field */
  const POSTAL_CODE = 'ice_geo_city.POSTAL_CODE';

  /** the column name for the TELEPHONE_CODE field */
  const TELEPHONE_CODE = 'ice_geo_city.TELEPHONE_CODE';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of iceModelGeoCity objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array iceModelGeoCity[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'GeoRegionId', 'Type', 'NameCyrillic', 'NameLatin', 'SlugCyrillic', 'SlugLatin', 'Latitude', 'Longitude', 'PostalCode', 'TelephoneCode', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'geoRegionId', 'type', 'nameCyrillic', 'nameLatin', 'slugCyrillic', 'slugLatin', 'latitude', 'longitude', 'postalCode', 'telephoneCode', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::GEO_REGION_ID, self::TYPE, self::NAME_CYRILLIC, self::NAME_LATIN, self::SLUG_CYRILLIC, self::SLUG_LATIN, self::LATITUDE, self::LONGITUDE, self::POSTAL_CODE, self::TELEPHONE_CODE, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'GEO_REGION_ID', 'TYPE', 'NAME_CYRILLIC', 'NAME_LATIN', 'SLUG_CYRILLIC', 'SLUG_LATIN', 'LATITUDE', 'LONGITUDE', 'POSTAL_CODE', 'TELEPHONE_CODE', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'geo_region_id', 'type', 'name_cyrillic', 'name_latin', 'slug_cyrillic', 'slug_latin', 'latitude', 'longitude', 'postal_code', 'telephone_code', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GeoRegionId' => 1, 'Type' => 2, 'NameCyrillic' => 3, 'NameLatin' => 4, 'SlugCyrillic' => 5, 'SlugLatin' => 6, 'Latitude' => 7, 'Longitude' => 8, 'PostalCode' => 9, 'TelephoneCode' => 10, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'geoRegionId' => 1, 'type' => 2, 'nameCyrillic' => 3, 'nameLatin' => 4, 'slugCyrillic' => 5, 'slugLatin' => 6, 'latitude' => 7, 'longitude' => 8, 'postalCode' => 9, 'telephoneCode' => 10, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::GEO_REGION_ID => 1, self::TYPE => 2, self::NAME_CYRILLIC => 3, self::NAME_LATIN => 4, self::SLUG_CYRILLIC => 5, self::SLUG_LATIN => 6, self::LATITUDE => 7, self::LONGITUDE => 8, self::POSTAL_CODE => 9, self::TELEPHONE_CODE => 10, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'GEO_REGION_ID' => 1, 'TYPE' => 2, 'NAME_CYRILLIC' => 3, 'NAME_LATIN' => 4, 'SLUG_CYRILLIC' => 5, 'SLUG_LATIN' => 6, 'LATITUDE' => 7, 'LONGITUDE' => 8, 'POSTAL_CODE' => 9, 'TELEPHONE_CODE' => 10, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'geo_region_id' => 1, 'type' => 2, 'name_cyrillic' => 3, 'name_latin' => 4, 'slug_cyrillic' => 5, 'slug_latin' => 6, 'latitude' => 7, 'longitude' => 8, 'postal_code' => 9, 'telephone_code' => 10, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
  );

  /**
   * Translates a fieldname to another type
   *
   * @param      string $name field name
   * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @param      string $toType   One of the class type constants
   * @return     string translated name of the field.
   * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
   */
  static public function translateFieldName($name, $fromType, $toType)
  {
    $toNames = self::getFieldNames($toType);
    $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
    if ($key === null)
    {
      throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
    }
    return $toNames[$key];
  }

  /**
   * Returns an array of field names.
   *
   * @param      string $type The type of fieldnames to return:
   *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     array A list of field names
   */

  static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
  {
    if (!array_key_exists($type, self::$fieldNames))
    {
      throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
    }
    return self::$fieldNames[$type];
  }

  /**
   * Convenience method which changes table.column to alias.column.
   *
   * Using this method you can maintain SQL abstraction while using column aliases.
   * <code>
   *    $c->addAlias("alias1", TablePeer::TABLE_NAME);
   *    $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
   * </code>
   * @param      string $alias The alias for the current table.
   * @param      string $column The column name for current table. (i.e. iceModelGeoCityPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(iceModelGeoCityPeer::TABLE_NAME.'.', $alias.'.', $column);
  }

  /**
   * Add all the columns needed to create a new object.
   *
   * Note: any columns that were marked with lazyLoad="true" in the
   * XML schema will not be added to the select list and only loaded
   * on demand.
   *
   * @param      Criteria $criteria object containing the columns to add.
   * @param      string   $alias    optional table alias
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function addSelectColumns(Criteria $criteria, $alias = null)
  {
    if (null === $alias)
    {
      $criteria->addSelectColumn(iceModelGeoCityPeer::ID);
      $criteria->addSelectColumn(iceModelGeoCityPeer::GEO_REGION_ID);
      $criteria->addSelectColumn(iceModelGeoCityPeer::TYPE);
      $criteria->addSelectColumn(iceModelGeoCityPeer::NAME_CYRILLIC);
      $criteria->addSelectColumn(iceModelGeoCityPeer::NAME_LATIN);
      $criteria->addSelectColumn(iceModelGeoCityPeer::SLUG_CYRILLIC);
      $criteria->addSelectColumn(iceModelGeoCityPeer::SLUG_LATIN);
      $criteria->addSelectColumn(iceModelGeoCityPeer::LATITUDE);
      $criteria->addSelectColumn(iceModelGeoCityPeer::LONGITUDE);
      $criteria->addSelectColumn(iceModelGeoCityPeer::POSTAL_CODE);
      $criteria->addSelectColumn(iceModelGeoCityPeer::TELEPHONE_CODE);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.GEO_REGION_ID');
      $criteria->addSelectColumn($alias . '.TYPE');
      $criteria->addSelectColumn($alias . '.NAME_CYRILLIC');
      $criteria->addSelectColumn($alias . '.NAME_LATIN');
      $criteria->addSelectColumn($alias . '.SLUG_CYRILLIC');
      $criteria->addSelectColumn($alias . '.SLUG_LATIN');
      $criteria->addSelectColumn($alias . '.LATITUDE');
      $criteria->addSelectColumn($alias . '.LONGITUDE');
      $criteria->addSelectColumn($alias . '.POSTAL_CODE');
      $criteria->addSelectColumn($alias . '.TELEPHONE_CODE');
    }
  }

  /**
   * Returns the number of rows matching criteria.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @return     int Number of matching rows.
   */
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    // we may modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelGeoCityPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelGeoCityPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelGeoCityPeer', $criteria, $con);
    }

    // BasePeer returns a PDOStatement
    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }
  /**
   * Selects one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     iceModelGeoCity
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = iceModelGeoCityPeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Selects several row from the DB.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return iceModelGeoCityPeer::populateObjects(iceModelGeoCityPeer::doSelectStmt($criteria, $con));
  }
  /**
   * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
   *
   * Use this method directly if you want to work with an executed statement durirectly (for example
   * to perform your own object hydration).
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con The connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     PDOStatement The executed PDOStatement object.
   * @see        BasePeer::doSelect()
   */
  public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      iceModelGeoCityPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelGeoCityPeer', $criteria, $con);
    }


    // BasePeer returns a PDOStatement
    return BasePeer::doSelect($criteria, $con);
  }
  /**
   * Adds an object to the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doSelect*()
   * methods in your stub classes -- you may need to explicitly add objects
   * to the cache in order to ensure that the same objects are always returned by doSelect*()
   * and retrieveByPK*() calls.
   *
   * @param      iceModelGeoCity $value A iceModelGeoCity object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = (string) $obj->getId();
      }
      self::$instances[$key] = $obj;
    }
  }

  /**
   * Removes an object from the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doDelete
   * methods in your stub classes -- you may need to explicitly remove objects
   * from the cache in order to prevent returning objects that no longer exist.
   *
   * @param      mixed $value A iceModelGeoCity object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof iceModelGeoCity)
      {
        $key = (string) $value->getId();
      }
      elseif (is_scalar($value))
      {
        // assume we've been passed a primary key
        $key = (string) $value;
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or iceModelGeoCity object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
        throw $e;
      }

      unset(self::$instances[$key]);
    }
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
   * @return     iceModelGeoCity Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
   * @see        getPrimaryKeyHash()
   */
  public static function getInstanceFromPool($key)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if (isset(self::$instances[$key]))
      {
        return self::$instances[$key];
      }
    }
    return null; // just to be explicit
  }
  
  /**
   * Clear the instance pool.
   *
   * @return     void
   */
  public static function clearInstancePool()
  {
    self::$instances = array();
  }
  
  /**
   * Method to invalidate the instance pool of all tables related to ice_geo_city
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
   */
  public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
  {
    // If the PK cannot be derived from the row, return NULL.
    if ($row[$startcol] === null)
    {
      return null;
    }
    return (string) $row[$startcol];
  }

  /**
   * Retrieves the primary key from the DB resultset row
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, an array of the primary key columns will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     mixed The primary key of the row
   */
  public static function getPrimaryKeyFromRow($row, $startcol = 0)
  {
    return (int) $row[$startcol];
  }
  
  /**
   * The returned array will contain objects of the default type or
   * objects that inherit from the default.
   *
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function populateObjects(PDOStatement $stmt)
  {
    $results = array();
  
    // set the class once to avoid overhead in the loop
    $cls = iceModelGeoCityPeer::getOMClass();
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = iceModelGeoCityPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = iceModelGeoCityPeer::getInstanceFromPool($key)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj->hydrate($row, 0, true); // rehydrate
        $results[] = $obj;
      }
      else
      {
        $obj = new $cls();
        $obj->hydrate($row);
        $results[] = $obj;
        iceModelGeoCityPeer::addInstanceToPool($obj, $key);
      }
    }
    $stmt->closeCursor();
    return $results;
  }
  /**
   * Populates an object of the default type or an object that inherit from the default.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     array (iceModelGeoCity object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = iceModelGeoCityPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = iceModelGeoCityPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + iceModelGeoCityPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = iceModelGeoCityPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      iceModelGeoCityPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }

  /**
   * Returns the TableMap related to this peer.
   * This method is not needed for general use but a specific application could have a need.
   * @return     TableMap
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function getTableMap()
  {
    return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
  }

  /**
   * Add a TableMap instance to the database for this peer class.
   */
  public static function buildTableMap()
  {
    $dbMap = Propel::getDatabaseMap(BaseiceModelGeoCityPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseiceModelGeoCityPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new iceModelGeoCityTableMap());
    }
  }

  /**
   * The class that the Peer will make instances of.
   *
   *
   * @return     string ClassName
   */
  public static function getOMClass()
  {
    return iceModelGeoCityPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a iceModelGeoCity or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelGeoCity object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from iceModelGeoCity object
    }

    if ($criteria->containsKey(iceModelGeoCityPeer::ID) && $criteria->keyContainsValue(iceModelGeoCityPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelGeoCityPeer::ID.')');
    }


    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table (I guess, conceivably)
      $con->beginTransaction();
      $pk = BasePeer::doInsert($criteria, $con);
      $con->commit();
    }
    catch(PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }

    return $pk;
  }

  /**
   * Performs an UPDATE on the database, given a iceModelGeoCity or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelGeoCity object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(iceModelGeoCityPeer::ID);
      $value = $criteria->remove(iceModelGeoCityPeer::ID);
      if ($value)
      {
        $selectCriteria->add(iceModelGeoCityPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelGeoCityPeer::TABLE_NAME);
      }

    } else { // $values is iceModelGeoCity object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the ice_geo_city table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(iceModelGeoCityPeer::TABLE_NAME, $con, iceModelGeoCityPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      iceModelGeoCityPeer::clearInstancePool();
      iceModelGeoCityPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs a DELETE on the database, given a iceModelGeoCity or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or iceModelGeoCity object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      iceModelGeoCityPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof iceModelGeoCity) { // it's a model object
      // invalidate the cache for this single object
      iceModelGeoCityPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(iceModelGeoCityPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        iceModelGeoCityPeer::removeInstanceFromPool($singleval);
      }
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      iceModelGeoCityPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Validates all modified columns of given iceModelGeoCity object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      iceModelGeoCity $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(iceModelGeoCityPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(iceModelGeoCityPeer::TABLE_NAME);

      if (! is_array($cols))
      {
        $cols = array($cols);
      }

      foreach ($cols as $colName)
      {
        if ($tableMap->containsColumn($colName))
        {
          $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
          $columns[$colName] = $obj->$get();
        }
      }
    }
    else
    {

    }

    return BasePeer::doValidate(iceModelGeoCityPeer::DATABASE_NAME, iceModelGeoCityPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     iceModelGeoCity
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = iceModelGeoCityPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(iceModelGeoCityPeer::DATABASE_NAME);
    $criteria->add(iceModelGeoCityPeer::ID, $pk);

    $v = iceModelGeoCityPeer::doSelect($criteria, $con);

    return !empty($v) > 0 ? $v[0] : null;
  }

  /**
   * Retrieve multiple objects by pkey.
   *
   * @param      array $pks List of primary keys
   * @param      PropelPDO $con the connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function retrieveByPKs($pks, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelGeoCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(iceModelGeoCityPeer::DATABASE_NAME);
      $criteria->add(iceModelGeoCityPeer::ID, $pks, Criteria::IN);
      $objs = iceModelGeoCityPeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array(array('slug_cyrillic'), array('slug_latin'));
  }

  // symfony_behaviors behavior
  
  /**
   * Returns the name of the hook to call from inside the supplied method.
   *
   * @param string $method The calling method
   *
   * @return string A hook name for {@link sfMixer}
   *
   * @throws LogicException If the method name is not recognized
   */
  static private function getMixerPreSelectHook($method)
  {
    if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
    {
      return sprintf('BaseiceModelGeoCityPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseiceModelGeoCityPeer::buildTableMap();

