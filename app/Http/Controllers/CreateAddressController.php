<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddressCountry;
use App\AddressState;
use App\AddressDistrict;
use App\AddressSubDivision;
use App\AddressCircleOffice;
use App\AddressPostOffice;
use App\AddressPoliceStation;
use App\AddressGpOrTown;
use App\AddressBlock;
use App\AddressWardNo;
use App\AddressVillage;

class CreateAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['country'])
        {
            $addresses=$request['country'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressCountry;                     
                            $newAddress->country=$address['0'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        
        if($request['state'])
        {
            $addresses=$request['state'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressState;                     
                            $newAddress->state=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['district'])
        {
            $addresses=$request['district'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressDistrict;                     
                            $newAddress->district=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['subDivision'])
        {
            $addresses=$request['subDivision'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressSubDivision;                     
                            $newAddress->subDivision=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['circleOffice'])
        {
            $addresses=$request['circleOffice'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressCircleOffice;                     
                            $newAddress->circleOffice=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['policeStation'])
        {
            $addresses=$request['policeStation'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressPoliceStation;                     
                            $newAddress->policeStation=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['postOffice'])
        {
            $addresses=$request['postOffice'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressPostOffice;                     
                            $newAddress->postOffice=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->fk_police_station_id=$address['6'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['block'])
        {
            $addresses=$request['block'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressBlock;                     
                            $newAddress->block=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->fk_police_station_id=$address['6'];
                            $newAddress->fk_post_office_id=$address['7'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['gpORtown'])
        {
            $addresses=$request['gpORtown'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressGpOrTown;                     
                            $newAddress->gpORtown=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->fk_police_station_id=$address['6'];
                            $newAddress->fk_post_office_id=$address['7'];
                            $newAddress->fk_block_id=$address['8'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['wardNo'])
        {
            $addresses=$request['wardNo'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressWardNo;                     
                            $newAddress->wardNo=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->fk_police_station_id=$address['6'];
                            $newAddress->fk_post_office_id=$address['7'];
                            $newAddress->fk_block_id=$address['8'];
                            $newAddress->fk_gp_or_town_id=$address['9'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
        if($request['village'])
        {
            $addresses=$request['village'];
            foreach($addresses as $address){
                    try{
                            $newAddress=new AddressVillage;                     
                            $newAddress->village=$address['0'];
                            $newAddress->fk_country_id=$address['1'];
                            $newAddress->fk_state_id=$address['2'];
                            $newAddress->fk_district_id=$address['3'];
                            $newAddress->fk_sub_division_id=$address['4'];
                            $newAddress->fk_circle_office_id=$address['5'];
                            $newAddress->fk_police_station_id=$address['6'];
                            $newAddress->fk_post_office_id=$address['7'];
                            $newAddress->fk_block_id=$address['8'];
                            $newAddress->fk_gp_or_town_id=$address['9'];
                            $newAddress->fk_ward_no_id=$address['10'];
                            $newAddress->save();  
                        }
                        catch(\Exception $e){
                            
                        }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
