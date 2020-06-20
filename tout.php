<?php
//echo 'This is tout (= test output)<br />';

/** 
* designed to sit at web root level and get included by 'config_server.php' file.
* so as to be available to all pages using 'config_server.php' 
* (which in turn will be included at folder level via the 'folder_settings.php' file).
*/
	/**
	* Simple test class for outputting code elements like magic constants
	* Some print functions use the tag wrapper. Some haven't been updated yet.
	*/
	class TestOutput {
		
		/**
		* Wraps string in paragraph tags 
		* (the tag wrapper)
		*/ 
		private function printString($inpstring) {
			echo '<p>' . $inpstring . '</p>';
		}
		
		/**
		* Prints DIR_BASE defined constant (from config file)
		*/
		public function printDirBase() {
			$this->printString( "This location has <em>'" . DIR_BASE . "'</em> base directory.");
		}
		
		/**
		* Prints namespace name (works only with PHP 5.3)
		*/ 
		public function printNamespace() {
			if (__NAMESPACE__) {
				echo "Namespace name is '" . __NAMESPACE__ . "'.</p><p>";
			} else {
				echo "Namespace is not defined.</p><p>";
			}
		}

		/**
		* Prints document root
		*/
		public function printDocRoot() {
			$this->printString( "Document root is '<em>" . $_SERVER["DOCUMENT_ROOT"] . "</em>'." );
		}

		/**
		* Prints filename with full filepath
		*/
		public function printFile() {
			echo "File is '<em>" . __FILE__ . "</em>'.</p><p>";
		}

		/**
		* Prints directory name with full path
		*/
		public function printDir() {
			echo "Directory is '" . __DIR__ . "'.</p><p>";
		}

		/**
		* Prints line
		*/
		public function printLineNo() {
			echo "Line number is '" . __LINE__ . "'.</p><p>";
		}

		/**
		*Prints class name
		*/ 
		public function printClassName() {
			$this->printString( "This is <em>" . __CLASS__ . "</em> class." );
		}

		/**
		* Prints class and method name
		*/
		public function printMethodName() {
			$this->printString( "This is <em>" . __METHOD__ . "</em> method." );
		}

		/**
		* Prints function name
		*/
		public function printFunction() {
			echo "This is function '" . __FUNCTION__ . "'.</p><p>";
		}

	}
