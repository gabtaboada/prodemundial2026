 <div class="pricing-grid grid-two"><!--Grupo B -->
     <div class="CajaDerecha">
         <div class="w3ls-top">
             <h3>Grupo B</h3>
         </div>
         <div class="w3ls-bottom">
             <div class="tabla-cel-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th>
                         </tr>
                     </thead>

                     <tbody>
                         @foreach ($GrupoB as $partido)
                             <tr style="border: 1px solid #ddd;">
                                 <td style="padding:0px;">
                                     {{-- Goles Equipo 1 --}}
                                     <select name="Par_{{ $partido->B_Partido }}_GolEqui1"
                                         id="Par_{{ $partido->B_Partido }}_GolEqui1"
                                         style="height: 23px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
                                         <option value="">Goles</option>
                                         @for ($g = 0; $g <= 12; $g++)
                                             <option value="{{ $g }}" 
														{{-- {{ old('Par_'.$partido->B_Partido.'_GolEqui1') === (string)$g ? 'selected' : '' }} --}}
                                                        {{ (old('Par_'.$partido->B_Partido.'_GolEqui1') !== null ? old('Par_'.$partido->B_Partido.'_GolEqui1') : (isset($Borrador) && $Borrador && !is_null($Borrador->{'Par_'.$partido->B_Partido.'_GolEqui1'}) ? (string)$Borrador->{'Par_'.$partido->B_Partido.'_GolEqui1'} : '')) === (string)$g ? 'selected' : '' }}                                                        
                                                        
                                                        >
														{{ $g }}
													</option>
                                         @endfor
                                     </select>                                 </td>
                                 <td style="max-width: 30px;">
                                     {{ $partido->B_abreviado1 }}
                                 </td>
                                 <td style="max-width: 23px;">
                                     <img src="{{ $partido->B_Bandera1 }}" alt="" title=""
                                         style="border-radius: 50%;" width="20" height="20">
                                 </td>
                                 <td style="max-width: 15px;margin-top:5px;">
                                     VS
                                 </td>

                                 <td style="max-width: 23px;">
                                     <img src="{{ $partido->B_Bandera2 }}" alt="" title=""
                                         style="border-radius: 50%;" width="20" height="20">
                                 </td>
                                 <td style="max-width: 30px;">
                                     {{ $partido->B_abreviado2 }}
                                 </td>
                                 <td style="padding:0px;">
                                     {{-- Goles Equipo 2 --}}
                                     <select name="Par_{{ $partido->B_Partido }}_GolEqui2"
                                         id="Par_{{ $partido->B_Partido }}_GolEqui2"
                                         style="height: 20px;font-size: 12px;color: #555;background-color: #fff;border: 1px solid #ccc;border-radius: 4px;">
                                         <option value="">Goles</option>
                                         @for ($g = 0; $g <= 12; $g++)
                                             <option value="{{ $g }}"
														{{-- {{ old('Par_'.$partido->B_Partido.'_GolEqui2') === (string)$g ? 'selected' : '' }} --}}
                                                        {{ (old('Par_'.$partido->B_Partido.'_GolEqui2') !== null ? old('Par_'.$partido->B_Partido.'_GolEqui2') : (isset($Borrador) && $Borrador && !is_null($Borrador->{'Par_'.$partido->B_Partido.'_GolEqui2'}) ? (string)$Borrador->{'Par_'.$partido->B_Partido.'_GolEqui2'} : '')) === (string)$g ? 'selected' : '' }}                                                        
                                                        >
														{{ $g }}
													</option>
                                         @endfor
                                     </select>

                                 </td>
                             </tr>
                         @endforeach
                         <div class="form-group">
                             <input type="hidden" name="B1" value="{{ null }}">
                             <input type="hidden" name="B2" value="{{ null }}">
                             <input type="hidden" name="B3" value="{{ null }}">
                             <input type="hidden" name="B4" value="{{ null }}">
                             <input type="hidden" name="B5" value="{{ null }}">
                             <input type="hidden" name="B6" value="{{ null }}">
                         </div>
                     </tbody>
                 </table>
             </div><!--tabla cel-->
         </div>
     </div><!-- caja derecha -->
 </div><!-- Grupo B -->
 <div class="clearfix"> </div>
 <!-- GRUPO AB -->
