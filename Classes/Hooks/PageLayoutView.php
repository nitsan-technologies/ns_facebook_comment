<?php
namespace Nitsan\NsFacebookComment\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class PageLayoutView implements \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface {

    public function preProcess(\TYPO3\CMS\Backend\View\PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row) {
       
        if ($row['CType'] == 'list' && $row['list_type'] == 'nsfacebookcomment_nsfacebookcomment') {

            $drawItem = false;

            $headerContent = 
                "<table class='table table-striped table-hover typo3-extension-list no-footer'><thead><tr><th colspan='2' style='height:30px;'>".LocalizationUtility::translate('pi1_title','ns_facebook_comment')."</th></tr></thead>" ;

            $ffXml = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($row['pi_flexform']);
            $itemContent= "<tbody>";
                
                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.facebook-app-id','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.appid']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.appid']['vDEF']."</td></tr>";
                }else{ $itemContent .="<td></td>"; }

                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.comment-box-width','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.datawidth']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.datawidth']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.comment-per-page','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.datanumposts']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.datanumposts']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";
                
                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.comment-box-lebel','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.fbtitle']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.fbtitle']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.font-color','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.textcolor']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.textcolor']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.font-size','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.fontsize']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.fontsize']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.text-align','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.position']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.position']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.font-family','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.fontfamily']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.fontfamily']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

                $itemContent .= "<tr><th style='text-align:left'>".LocalizationUtility::translate('flexform.bg-color','ns_facebook_comment')."</th>";
                if($ffXml['data']['sDEF']['lDEF']['settings.backgroundcolor']['vDEF']){
                     $itemContent .= "<td style='padding-left: 10px;'>".$ffXml['data']['sDEF']['lDEF']['settings.backgroundcolor']['vDEF']."</td>";
                }else{ $itemContent .="<td></td>"; }
                $itemContent .="</tr>";

            $itemContent .= "</tbody></table>";
        }
    }
}