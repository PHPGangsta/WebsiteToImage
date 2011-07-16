<?php

class WebsiteToImage
{
    const FORMAT_JPG = 'jpg';
    const FORMAT_GIF = 'gif';
    const FORMAT_PNG = 'png';

    protected $_programPath;
    protected $_outputPath;
    protected $_url;
    protected $_format;
    protected $_quality;

    public function start()
    {
        $programPath = escapeshellcmd($this->_programPath);
        $outputPath  = escapeshellarg($this->_outputPath);
        $url         = escapeshellarg($this->_url);
        $format      = escapeshellarg($this->_format);
        $quality     = escapeshellarg($this->_quality);

        $command = "$programPath --format $format --quality $quality $url $outputPath";

        exec($command);
    }

    public function setOutputPath($outputPath)
    {
        $this->_outputPath = $outputPath;
        return $this;
    }

    public function getOutputPath()
    {
        return $this->_outputPath;
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