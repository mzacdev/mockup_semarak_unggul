$logoUrls = @{
    "drb-hicom.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/DRB-HICOM_logo.svg/2560px-DRB-HICOM_logo.svg.png"
    "malaysia-airlines.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Malaysia_Airlines_logo.svg/2560px-Malaysia_Airlines_logo.svg.png"
    "pos-malaysia.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Pos_Malaysia_logo.svg/2560px-Pos_Malaysia_logo.svg.png"
    "umw-holdings.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/UMW_Holdings_logo.svg/2560px-UMW_Holdings_logo.svg.png"
    "sp-setia.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/SP_Setia_logo.svg/2560px-SP_Setia_logo.svg.png"
    "gamuda.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Gamuda_logo.svg/2560px-Gamuda_logo.svg.png"
    "mrt-corp.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/MRT_Corp_logo.svg/2560px-MRT_Corp_logo.svg.png"
    "ioi-group.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/IOI_Group_logo.svg/2560px-IOI_Group_logo.svg.png"
    "sunway-group.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Sunway_Group_logo.svg/2560px-Sunway_Group_logo.svg.png"
    "ytl-corporation.png" = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/YTL_Corporation_logo.svg/2560px-YTL_Corporation_logo.svg.png"
    "petronas.png" = "https://www.petronas.com/sites/default/files/2021-02/PETRONAS_Logo_0.png"
    "maybank.png" = "https://www.maybank.com/iwov-resources/corporate_new/img/logo-maybank.svg"
    "tenaga.png" = "https://www.tnb.com.my/assets/images/logo-tnb.svg"
    "airasia.png" = "https://www.airasia.com/static/media/airasia-logo.svg"
    "celcom.png" = "https://www.celcom.com.my/assets/images/celcom-logo.svg"
    "digi.png" = "https://www.digi.com.my/assets/images/digi-logo.svg"
    "maxis.png" = "https://www.maxis.com.my/content/dam/maxis/en/personal/images/logo/maxis-logo.svg"
    "axiata.png" = "https://www.axiata.com/wp-content/themes/axiata/assets/images/logo.svg"
    "sime-darby.png" = "https://www.simedarby.com/sites/default/files/2021-02/sime-darby-logo.svg"
    "genting.png" = "https://www.genting.com/images/genting-logo.svg"
}

$outputDir = "assets/images/logos"

# Create directory if it doesn't exist
if (-not (Test-Path $outputDir)) {
    New-Item -ItemType Directory -Path $outputDir -Force
}

# Download each logo
foreach ($logo in $logoUrls.GetEnumerator()) {
    $outputPath = Join-Path $outputDir $logo.Key
    Write-Host "Downloading $($logo.Key)..."
    try {
        $webClient = New-Object System.Net.WebClient
        $webClient.Headers.Add("User-Agent", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36")
        $webClient.DownloadFile($logo.Value, $outputPath)
        Write-Host "Downloaded to $outputPath"
    } catch {
        Write-Host "Failed to download $($logo.Key): $_"
    }
}

Write-Host "Logo download process completed!" 