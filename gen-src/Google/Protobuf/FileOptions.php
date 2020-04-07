<?php

namespace Google\Protobuf;

use Google\Protobuf\FileOptions\OptimizeModeEnum;
use Skrz\Meta\Protobuf\ProtobufField;

/**
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!                                                     !!!
 * !!!   THIS CLASS HAS BEEN AUTO-GENERATED, DO NOT EDIT   !!!
 * !!!                                                     !!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
final class FileOptions
{
	/**
	 * Sets the Java package where classes generated from this .proto will be
	 *  placed.  By default, the proto package is used, but this is often
	 *  inappropriate because proto packages do not normally start with backwards
	 *  domain names.
	 *
	 * @var string
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=1, wireType="string", unsigned=false, packed=false)
	 */
	protected $javaPackage;

	/**
	 * If set, all the classes from the .proto file are wrapped in a single
	 *  outer class with the given name.  This applies to both Proto1
	 *  (equivalent to the old "--one_java_file" option) and Proto2 (where
	 *  a .proto always translates to a single class, but you may want to
	 *  explicitly choose the class name).
	 *
	 * @var string
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=8, wireType="string", unsigned=false, packed=false)
	 */
	protected $javaOuterClassname;

	/**
	 * If set true, then the Java code generator will generate a separate .java
	 *  file for each top-level message, enum, and service defined in the .proto
	 *  file.  Thus, these types will *not* be nested inside the outer class
	 *  named by java_outer_classname.  However, the outer class will still be
	 *  generated to contain the file's getDescriptor() method as well as any
	 *  top-level extensions defined in the file.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=10, wireType="varint", unsigned=false, packed=false)
	 */
	protected $javaMultipleFiles;

	/**
	 * If set true, then the Java code generator will generate equals() and
	 *  hashCode() methods for all messages defined in the .proto file.
	 *  This increases generated code size, potentially substantially for large
	 *  protos, which may harm a memory-constrained application.
	 *  - In the full runtime this is a speed optimization, as the
	 *  AbstractMessage base class includes reflection-based implementations of
	 *  these methods.
	 *  - In the lite runtime, setting this option changes the semantics of
	 *  equals() and hashCode() to more closely match those of the full runtime;
	 *  the generated methods compute their results based on field values rather
	 *  than object identity. (Implementations should not assume that hashcodes
	 *  will be consistent across runtimes or versions of the protocol compiler.)
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=20, wireType="varint", unsigned=false, packed=false)
	 */
	protected $javaGenerateEqualsAndHash;

	/**
	 * If set true, then the Java2 code generator will generate code that
	 *  throws an exception whenever an attempt is made to assign a non-UTF-8
	 *  byte sequence to a string field.
	 *  Message reflection will do the same.
	 *  However, an extension field still accepts non-UTF-8 byte sequences.
	 *  This option has no effect on when used with the lite runtime.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=27, wireType="varint", unsigned=false, packed=false)
	 */
	protected $javaStringCheckUtf8;

	/**
	 * @var int
	 * @see OptimizeModeEnum
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=9, wireType="varint", unsigned=false, packed=false)
	 */
	protected $optimizeFor;

	/**
	 * Sets the Go package where structs generated from this .proto will be
	 *  placed. If omitted, the Go package will be derived from the following:
	 *    - The basename of the package import path, if provided.
	 *    - Otherwise, the package statement in the .proto file, if present.
	 *    - Otherwise, the basename of the .proto file, without extension.
	 *
	 * @var string
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=11, wireType="string", unsigned=false, packed=false)
	 */
	protected $goPackage;

	/**
	 * Should generic services be generated in each language?  "Generic" services
	 *  are not specific to any particular RPC system.  They are generated by the
	 *  main code generators in each language (without additional plugins).
	 *  Generic services were the only kind of service generation supported by
	 *  early versions of google.protobuf.
	 *
	 *  Generic services are now considered deprecated in favor of using plugins
	 *  that generate code specific to your particular RPC system.  Therefore,
	 *  these default to false.  Old code which depends on generic services should
	 *  explicitly set them to true.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=16, wireType="varint", unsigned=false, packed=false)
	 */
	protected $ccGenericServices;

	/**
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=17, wireType="varint", unsigned=false, packed=false)
	 */
	protected $javaGenericServices;

	/**
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=18, wireType="varint", unsigned=false, packed=false)
	 */
	protected $pyGenericServices;

	/**
	 * Is this file deprecated?
	 *  Depending on the target platform, this can emit Deprecated annotations
	 *  for everything in the file, or it will be completely ignored; in the very
	 *  least, this is a formalization for deprecating files.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=23, wireType="varint", unsigned=false, packed=false)
	 */
	protected $deprecated;

	/**
	 * Enables the use of arenas for the proto messages in this file. This applies
	 *  only to generated classes for C++.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=31, wireType="varint", unsigned=false, packed=false)
	 */
	protected $ccEnableArenas;

	/**
	 * Sets the objective c class prefix which is prepended to all objective c
	 *  generated classes from this .proto. There is no default.
	 *
	 * @var string
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=36, wireType="string", unsigned=false, packed=false)
	 */
	protected $objcClassPrefix;

	/**
	 * Namespace for generated classes; defaults to the package.
	 *
	 * @var string
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=37, wireType="string", unsigned=false, packed=false)
	 */
	protected $csharpNamespace;

	/**
	 * Whether the nano proto compiler should generate in the deprecated non-nano
	 *  suffixed package.
	 *
	 * @var bool
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=38, wireType="varint", unsigned=false, packed=false)
	 */
	protected $javananoUseDeprecatedPackage;

	/**
	 * The parser stores options it doesn't recognize here. See above.
	 *
	 * @var UninterpretedOption[]
	 *
	 * @Skrz\Meta\Protobuf\ProtobufField(number=999, wireType="string", unsigned=false, packed=false)
	 */
	protected $uninterpretedOption;


	/**
	 * @return string
	 */
	public function getJavaPackage()
	{
		return $this->javaPackage;
	}


	/**
	 * @param string $javaPackage
	 *
	 * @return self
	 */
	public function setJavaPackage($javaPackage)
	{
		$this->javaPackage = $javaPackage;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getJavaOuterClassname()
	{
		return $this->javaOuterClassname;
	}


	/**
	 * @param string $javaOuterClassname
	 *
	 * @return self
	 */
	public function setJavaOuterClassname($javaOuterClassname)
	{
		$this->javaOuterClassname = $javaOuterClassname;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getJavaMultipleFiles()
	{
		return $this->javaMultipleFiles;
	}


	/**
	 * @param bool $javaMultipleFiles
	 *
	 * @return self
	 */
	public function setJavaMultipleFiles($javaMultipleFiles)
	{
		$this->javaMultipleFiles = $javaMultipleFiles;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getJavaGenerateEqualsAndHash()
	{
		return $this->javaGenerateEqualsAndHash;
	}


	/**
	 * @param bool $javaGenerateEqualsAndHash
	 *
	 * @return self
	 */
	public function setJavaGenerateEqualsAndHash($javaGenerateEqualsAndHash)
	{
		$this->javaGenerateEqualsAndHash = $javaGenerateEqualsAndHash;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getJavaStringCheckUtf8()
	{
		return $this->javaStringCheckUtf8;
	}


	/**
	 * @param bool $javaStringCheckUtf8
	 *
	 * @return self
	 */
	public function setJavaStringCheckUtf8($javaStringCheckUtf8)
	{
		$this->javaStringCheckUtf8 = $javaStringCheckUtf8;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getOptimizeFor()
	{
		return $this->optimizeFor;
	}


	/**
	 * @param int $optimizeFor
	 *
	 * @return self
	 */
	public function setOptimizeFor($optimizeFor)
	{
		$this->optimizeFor = $optimizeFor;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getGoPackage()
	{
		return $this->goPackage;
	}


	/**
	 * @param string $goPackage
	 *
	 * @return self
	 */
	public function setGoPackage($goPackage)
	{
		$this->goPackage = $goPackage;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getCcGenericServices()
	{
		return $this->ccGenericServices;
	}


	/**
	 * @param bool $ccGenericServices
	 *
	 * @return self
	 */
	public function setCcGenericServices($ccGenericServices)
	{
		$this->ccGenericServices = $ccGenericServices;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getJavaGenericServices()
	{
		return $this->javaGenericServices;
	}


	/**
	 * @param bool $javaGenericServices
	 *
	 * @return self
	 */
	public function setJavaGenericServices($javaGenericServices)
	{
		$this->javaGenericServices = $javaGenericServices;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getPyGenericServices()
	{
		return $this->pyGenericServices;
	}


	/**
	 * @param bool $pyGenericServices
	 *
	 * @return self
	 */
	public function setPyGenericServices($pyGenericServices)
	{
		$this->pyGenericServices = $pyGenericServices;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getDeprecated()
	{
		return $this->deprecated;
	}


	/**
	 * @param bool $deprecated
	 *
	 * @return self
	 */
	public function setDeprecated($deprecated)
	{
		$this->deprecated = $deprecated;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getCcEnableArenas()
	{
		return $this->ccEnableArenas;
	}


	/**
	 * @param bool $ccEnableArenas
	 *
	 * @return self
	 */
	public function setCcEnableArenas($ccEnableArenas)
	{
		$this->ccEnableArenas = $ccEnableArenas;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getObjcClassPrefix()
	{
		return $this->objcClassPrefix;
	}


	/**
	 * @param string $objcClassPrefix
	 *
	 * @return self
	 */
	public function setObjcClassPrefix($objcClassPrefix)
	{
		$this->objcClassPrefix = $objcClassPrefix;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getCsharpNamespace()
	{
		return $this->csharpNamespace;
	}


	/**
	 * @param string $csharpNamespace
	 *
	 * @return self
	 */
	public function setCsharpNamespace($csharpNamespace)
	{
		$this->csharpNamespace = $csharpNamespace;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function getJavananoUseDeprecatedPackage()
	{
		return $this->javananoUseDeprecatedPackage;
	}


	/**
	 * @param bool $javananoUseDeprecatedPackage
	 *
	 * @return self
	 */
	public function setJavananoUseDeprecatedPackage($javananoUseDeprecatedPackage)
	{
		$this->javananoUseDeprecatedPackage = $javananoUseDeprecatedPackage;
		return $this;
	}


	/**
	 * @return UninterpretedOption[]
	 */
	public function getUninterpretedOption()
	{
		return $this->uninterpretedOption;
	}


	/**
	 * @param UninterpretedOption[] $uninterpretedOption
	 *
	 * @return self
	 */
	public function setUninterpretedOption($uninterpretedOption)
	{
		$this->uninterpretedOption = $uninterpretedOption;
		return $this;
	}
}
