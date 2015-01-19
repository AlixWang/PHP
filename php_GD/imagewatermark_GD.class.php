<?php
    /*
     *image water mark 
     *
     * */

    class waterMark{
            private $string;
            private $filename;
            private $logo;
            private $width;
            private $height;
            private $type;
            private $pwidth;
            private $pheight;
            private $ptype;
            private $img;
            private $pimg;

            function __construct($filename,$string,$logo){
                $this->filename=$filename;
                $this->string=$string;
                $this->logo=$logo;
            }

            function loadfile(){
                list($this->width,$this->height,$this->type)=getimagesize($this->filename);
                list($this->pwidth,$this->pheight,$this->ptype)=getimagesize($this->logo);

                $createimage='imagecreatefrom'.$type;
                $pcreateimage='imagecreatefrom'.$ptype;
                return $this->img=$createimage($this->filename);                                                                    
                return $this->pimg=$pcreateimage($this->logo);
            }
    }
