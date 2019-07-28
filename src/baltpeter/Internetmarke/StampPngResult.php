<?php

namespace baltpeter\Internetmarke;

class StampPngResult extends ApiResult {
  /**
   * @var string url to zipfile
   */
  public $link;
  /**
   * @var integer portokasse balance in eurocent
   */
  public $walletBallance;
  /**
   * @var stdClass with attributes `shopOrderId` and `voucherList`
   */
  public $shoppingCart;

  /**
   *
   * @param string $link           url to zipfile
   * @param integer $walletBallance portokasse balance in eurocent
   * @param stdClass $shoppingCart   with attributes `shopOrderId` and `voucherList`
   */
  public function __construct($link, $walletBallance, $shoppingCart) {
      $this->link           = $link;
      $this->walletBallance = $walletBallance;
      $this->shoppingCart   = $shoppingCart;
  }

  /**
   * Store zip and png files in folder of $path
   * @param string $path location where png should be extracted to
   * @return array filenames of png's that were extracted
   */
  public function unzipPNG($path)
  {
      // make sure $path ends with slash
      $path = rtrim($path, '/') . '/';

      if(!file_exists($path)){
        mkdir($path);
      }

      $tempFile = $path . 'zip' . date('Y-m-d_H:i:s'). '_' . uniqid();
      copy($this->link,$tempFile);

      $zip = new \ZipArchive();
      $zip->open($tempFile);
      $file_count = $zip->count();
      $files = [];
      for ($i=0; $i < $file_count; $i++) {
        $data     = $zip->getFromIndex($i);
        $filename = date('Y-m-d_H:i:s'). '_' . uniqid() . '.png';
        file_put_contents($path . $filename, $data);
        $files[]  = $filename;
      }

      return $files;
  }

}
