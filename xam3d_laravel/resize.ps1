Add-Type -AssemblyName System.Drawing
$imgPath = "C:\xampp\htdocs\xam3d_laravel\public\Image\logo4.png"
$outPath = "C:\xampp\htdocs\xam3d_laravel\public\Image\logo4_small.png"
$img = [System.Drawing.Image]::FromFile($imgPath)
$ratio = 400 / $img.Height
$newWidth = [math]::Round($img.Width * $ratio)
$newImg = New-Object System.Drawing.Bitmap($newWidth, 400)
$graph = [System.Drawing.Graphics]::FromImage($newImg)
$graph.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$graph.DrawImage($img, 0, 0, $newWidth, 400)
$newImg.Save($outPath, [System.Drawing.Imaging.ImageFormat]::Png)
$graph.Dispose()
$newImg.Dispose()
$img.Dispose()
