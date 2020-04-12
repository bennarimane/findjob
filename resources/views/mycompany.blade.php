@extends('layouts.app')
@section('content')
<div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="{{ route('company.update') }}"  method="post"  class="form-horizontal"enctype="multipart/form-data">
                            @csrf
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Entreprise</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Entreprise</label>
                                            <input type="text" id="company"   value="{{ $info->company->entreprise}}"name="entreprise" placeholder="Enter your company name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="tlf" class=" form-control-label">Télephone</label>
                                            <input type="number" id="vat" value="{{ $info->company->tlp}}" name="tlp" placeholder="+213 00 00 00 00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="mail" class=" form-control-label">Email</label>
                                            <input type="email" name="email"  value="{{ $info->company->email}}" id="vat" placeholder="entreprise@gmail.com" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="site" class=" form-control-label">Site Web</label>
                                            <input type="text" name="site" id="vat" value="{{ $info->company->site}}" placeholder="www.entreprise.com" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Adresse</label>
                                            <input type="text" name="adresse"  value="{{ $info->company->adresse}}"id="street" placeholder="l'adresse de votre entreprise" class="form-control">
                                        </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label for="Wilaya"  class=" form-control-label">Wilaya</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                <select name="wilaya" id="select"  value="{{ $info->company->wilaya}}" class="form-control @error('wilaya') is-invalid @enderror"  value="{{ old('wilaya') }}" required autocomplete="wilaya" autofocus>
                                                           <option value="Adrar">Adrar 01</option>
                                    <option value="Chlef">Chlef 02</option>
                                    <option value="Laghouat">Laghouat 03</option>
                                    <option value="Oum El Bouaghi ">Oum El Bouaghi 04</option>
                                    <option value="Batna">Batna 05</option>
                                    <option value="Béjaïa">Béjaïa 06</option>
                                    <option value="Biskra">Biskra 07</option>
                                    <option value="Béchar">Béchar 08</option>
                                    <option value="blida">blida 09</option>
                                    <option value="Bouira">Bouira 10</option>
                                    <option value="Tamanrasset">Tamanrasset 11</option>
                                    <option value="Tébessa">Tébessa 12</option>
                                    <option value="Tlemcen">Tlemcen 13</option>
                                    <option value="Tiaret">Tiaret 14</option>
                                    <option value="Tizi Ouzou">Tizi Ouzou 15</option>
                                     <option value="Alger">Alger 16</option>
                                    <option value="Djelfa">Djelfa 17</option>
                                    <option value="Jijel ">Jijel 18</option>
                                    <option value="Sétif">Sétif 19</option>
                                  <option value="saida">Saida 20</option>
                                    <option value="Skikda">Skikda 21</option>
                                    <option value="sidi belabes">sidi be abbes 22</option>
                                    <option value="annaba">Annaba 23</option>
                                    <option value="ghalma">Gualma 24</option>
                                    <option value="Costantine">Costantine 25</option>
                                     <option value="media">media 26</option>
                                    <option value="mostaganem">Mostaganem 27</option>
                                    <option value="Msila">Msila 28</option>
                                    <option value="Mascara">Mascara 29</option>
                                    <option value="ourgla">ourgla 30</option>
                                <option value="Oran">Oran 31</option>
                                                               </select>
                                                              
                                                   
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Code Postal </label>
                                                    <input type="number" name="postal"  value="{{ $info->company->postal}}" id="postal-code" placeholder="0000 " class="form-control">
                                                </div>
                                            </div>
                                               <div class="col-12">
                                            <div class="form-group">
                                            <label for="country" class=" form-control-label">Pays</label>
                                            <input type="text" name="pays" value="{{ $info->company->pays}}" id="country" placeholder="Pays" class="form-control">
                                        </div></div>
                                        
                                           <div class="col-12">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label class=" form-control-label">Type de l'entreprise </label>
                                                </div></div></div>
                                                <div class="col col-md-12">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            
                                                        <select name="type" class="form-control" value="{{ $info->company->type}}"  >
                                                                      <option value="etatique">etatique</option>
                                                                      <option value="privé">prive</option>
                                                            
                                                                      </select> 
                                                       
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                       <!-- <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="type" value="option2" class="form-check-input">Privé
                                                        </label>-->

                                                    </div>
                                                </div>
                                            




                                                <div class="col col-md-3">
                                                    <label for="logo" class=" form-control-label">Ajouter un logo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="logo" class="form-control-file">
                                                </div>

                                                <div class="form-group">
                                            <label for="street" class=" form-control-label">Description</label>
<textarea name="description"  cols="100" rows="20">{{$info->company->description}}</textarea>               </div>                         
                                     <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ajouter
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>
                                    </div>
                                </div></div></div></form>
                            </div>
@endsection