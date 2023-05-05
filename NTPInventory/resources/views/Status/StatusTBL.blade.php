@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Category.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> STATUS </a> 
        </div>

        <div class="specsxa">
            <span> STATUS </span>
        </div>   


    <section class="packagesx" id="package">  
    <div class="Table-1" >
        <div class="Table-con">

            <div class="Cnt">
                <H3 class="ORP">Status Table</H3>
                <p class="DY">SDO QC</p>
            </div>

            <div class="Cnt2">                
                       
                <div class = "A-DD">
                        <a  href="{{Route('NTPStatus.create')}}" class ="Add-P">  <i class="fa-solid fa-plus"></i> <span> New </span></a> <!--Modal Button any -->
                </div>           
            </div>

        </div>

        <div class = " Table-Section">
            <table id="Category" class="displayd responsive nowrap" style="width:100%">
                <thead>
                    <tr>   
                        <th>Actions</th>  
                        <th>ID</th>                        
                        <th>Value</th>
                        <th>Availability</th>
                   
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="BTNS-EDTY"> 
                      
                            <!-- <button class="Edits" onclick="deleteData()" type="submit"> <i class="fa-solid fa-pen-to-square"></i> <span> EDIT </span> </button>                                   -->
                            <a class="Edits" href ="" > <i class="fa-solid fa-pen-to-square"></i>  </a>                   
                            <button class="Dlts" onclick="deleteData()" type="submit"><i class="fa-solid fa-trash"></i>  </button>      
                        </td>  
                        <td>Item Number</td>
                        <td>Name</td>
                        <td>Position</td>             
                        
                                 
                    </tr>               
                </tbody>
            </table>         
        </div>
    </div>
    </section>

    
    
@endsection  