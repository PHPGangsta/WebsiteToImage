<?php

class WebsiteToImage
{
    const FORMAT_JPG = 'jpg';
    const FORMAT_GIF = 'gif';
    const FORMAT_PNG = 'png';

    protected $_programPath;
    protected $_outputFile;
    protected $_url;
    protected $_format = self::FORMAT_JPG;
    protected $_quality = 90;

    public function start()
    {
        $programPath = escapeshellcmd($this->_programPath);
        $outputFile  = escapeshellarg($this->_outputFile);
        $url         = escapeshellarg($this->_url);
        $format      = escapeshellarg($this->_format);
        $quality     = escapeshellarg($this->_quality);

        $command = "$programPath --format $format --quality $quality $url $outputFile";

        exec($command);
    }

    public function setOutputFile($outputFile)
    {
        clearstatcache();
        if (!is_writable(dirname($outputFile))) {
            throw new Exception('output file not writable');
        }
        
        $this->_outputFile = $outputFile;
        return $this;
    }

    public function getOutputFile()
    {
        return $this->_outputFile;
    }

    public function setProgramPath($programPath)
    {
        $this->_programPath = $programPath;
        return $this;
    }

    public function getProgramPath()
    {
        return $this->_programPath;
    }

    public function setFormat($format)
    {
        $this->_format = $format;
        return $this;
    }

    public function getFormat()
    {
        return $this->_format;
    }

    public function setQuality($quality)
    {
        $this->_quality = (int)$quality;
        return $this;
    }

    public function getQuality()
    {
        return $this->_quality;
    }

    public function setUrl($url)
    {
        $this->_url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->_url;
    }
}