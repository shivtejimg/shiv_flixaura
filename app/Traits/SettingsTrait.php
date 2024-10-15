<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Transliterator;

trait SettingsTrait
{
    public static function settings($title)
    {
        $settingvalue = DB::table('settings')
            ->where('name', $title)
            ->first();
        return $settingvalue->value;
    }

    public static function getcategory()
    {
        $categories = DB::table('portfoliocategory')->where('status', 1)->get();
        return $categories;
    }
    public static function getcity()
    {
        $cities = DB::table('city')->where('top_location', 1)->get();
        return $cities;
    }

    public static function logoUpload($file, $destinationPath, $filename)
    {
        $extension = $file->getClientOriginalExtension();
        $ext = array("png", "PNG", "jpg", 'jpeg', 'JPG', "JPEG");

        if (!in_array($extension, $ext)) {
            return false;
        }

        $resi = $destinationPath . '/' . $filename;
        $upload_success = $file->move($destinationPath, $filename);

        return $filename;
    }

    public static function getcatcheck($id)
    {
        $image = DB::table('portfolio')->where('type', 'image')->where('category_id', $id)->first();
        $video = DB::table('portfolio')->where('type', 'video')->where('category_id', $id)->first();
        if (!empty($image) && !empty($video)) {
            $status = 3;
        } elseif (!empty($image) && empty($video)) {
            $status = 2;
        } elseif (empty($image) && !empty($video)) {
            $status = 1;
        } else {
            $status = 0;
        }

        return $status;
    }

    public static function getphotographercatcheck($id)
    {
        $image = DB::table('photographerportfolio')->where('type', 'image')->where('category_id', $id)->first();
        $video = DB::table('photographerportfolio')->where('type', 'video')->where('category_id', $id)->first();
        if (!empty($image) && !empty($video)) {
            $status = 3;
        } elseif (!empty($image) && empty($video)) {
            $status = 2;
        } elseif (empty($image) && !empty($video)) {
            $status = 1;
        } else {
            $status = 0;
        }

        return $status;
    }

    public static function blogCity()
    {
        $cities = DB::table('blogcategory')->where('status', 1)->get();
        return $cities;
    }

    public static function commonmailformat($content, $name)
    {
        $emailcontent = '<!DOCTYPE html>
                        <html>
                        <head></head>
                        <body>
                        <table style="border-collapse: collapse; table-layout: fixed; margin: 0 auto; border-spacing: 0; padding: 0; height: 100% !important; width: 100% !important; font-weight: normal; color: #3e4152; font-family: \'roboto\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1.4" height="100%" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td style="background: #ffffff; padding: 16px 0">
                                <table style="max-width: 600px; margin: auto; border-spacing: 0; background: #673ab7; padding: 4px; border-radius: 16px; overflow: hidden" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                    <tr>
                                        <td style="border-collapse: collapse">
                                        <table style="margin: auto; border-spacing: 0; background: white; border-radius: 12px; overflow: hidden" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td style="border-collapse: collapse">
                                                <table style="border-spacing: 0; border-collapse: collapse" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td style="border-collapse: collapse; padding: 16px 32px" align="left" valign="middle">
                                                        <table style="border-spacing: 0; border-collapse: collapse" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td style="padding: 0; text-align: left; border-collapse: collapse" width="40" align="left" valign="middle">
                                                                <a href="#" style="text-decoration: none; color: #ffffff; outline: 0; border: 0; border-none" target="_blank" data-saferedirecturl="">
                                                                    <img src="https://www.flixaura.com/public/frontend_assets/img/header/logo.png" title="" alt="" style="margin: auto; text-align: center; border: 0; outline: none; text-decoration: none; min-height: 40px" align="middle" border="0" width="100" class="CToWUd" data-bit="iit">
                                                                </a>
                                                                </td>
                                                                <td width="16" align="left" valign="middle" style="border-collapse: collapse">&nbsp;</td>
                                                                <td align="right" valign="middle">
                                                                ' . date('M j, Y') . '
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-collapse: collapse; padding: 32px; background: #ffffff; font-family: \'roboto\', Arial, Helvetica, sans-serif; padding-top: 0px;">
                                                <p style="padding: 0; margin: 0">
                                                    Hi Neeraj Rajput,
                                                    <br><br>
                                                    '.$content.'
                                                    <br><br>
                                                </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </body>
                        </html>';
        return $emailcontent;
    }

}
