<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

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
                            $newAddress=new Address;                     
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
                            $newAddress=new Address;                     
                            $newAddress->state=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->district=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->subDivision=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->circleOffice=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->policeStation=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->postOffice=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->block=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->gpORtown=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->wardNo=$address['0'];
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
                            $newAddress=new Address;                     
                            $newAddress->village=$address['0'];
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
