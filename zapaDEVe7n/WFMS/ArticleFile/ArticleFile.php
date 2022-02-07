<?php

namespace zapaDEVe7n\WFMS\ArticleFile;

class ArticleFile {

	private $filename;
	private $resource;

	public function __construct( string $filename ) {
		$this->filename = $filename;


		if ( is_writable( $this->filename ) ) {
			$resource = fopen( $this->filename, 'a' );

			if ( $resource ) {
				$this->resource = $resource;
			} else {
				echo "Не могу открыть файл ($filename)";
				exit;
			}
		}
	}

	public function __destruct() {
		fclose( $this->resource );
	}

	public function setContent( string $content ) {
		if ( fwrite( $this->resource, $content ) === false ) {
			echo "Не могу произвести запись в файл ($this->filename)";
			exit;
		}
		echo "Ура! Записали ($content) в файл ($this->filename)";
	}

}