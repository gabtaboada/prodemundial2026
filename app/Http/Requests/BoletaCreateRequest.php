<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BoletaCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
public function rules()
    {
        return [
      //// GRUPO A ///  
      /*      
            'A1' => 'required',        
            'A2' => 'required',
            'A3' => 'required',
            'A4' => 'required',
            'A5' => 'required',
            'A6' => 'required',
    */
            'Par_A1_GolEqui1' => 'required',      
            'Par_A1_GolEqui2' => 'required', 
            'Par_A2_GolEqui1' => 'required', 
            'Par_A2_GolEqui2' => 'required', 
            'Par_A3_GolEqui1' => 'required', 
            'Par_A3_GolEqui2' => 'required',             
            'Par_A4_GolEqui1' => 'required', 
            'Par_A4_GolEqui2' => 'required',             
            'Par_A5_GolEqui1' => 'required', 
            'Par_A5_GolEqui2' => 'required',             
            'Par_A6_GolEqui1' => 'required', 
            'Par_A6_GolEqui2' => 'required',   
         
        //// GRUPO B ///  
        /*     
            'B1' => 'required',        
            'B2' => 'required',
            'B3' => 'required',
            'B4' => 'required',
            'B5' => 'required',
            'B6' => 'required',       
        */
            'Par_B1_GolEqui1' => 'required',      
            'Par_B1_GolEqui2' => 'required', 
            'Par_B2_GolEqui1' => 'required', 
            'Par_B2_GolEqui2' => 'required', 
            'Par_B3_GolEqui1' => 'required', 
            'Par_B3_GolEqui2' => 'required',             
            'Par_B4_GolEqui1' => 'required', 
            'Par_B4_GolEqui2' => 'required',             
            'Par_B5_GolEqui1' => 'required', 
            'Par_B5_GolEqui2' => 'required',             
            'Par_B6_GolEqui1' => 'required', 
            'Par_B6_GolEqui2' => 'required',               
        //// GRUPO C ///    
/*           
            'C1' => 'required',        
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'C6' => 'required',
*/
            'Par_C1_GolEqui1' => 'required',      
            'Par_C1_GolEqui2' => 'required', 
            'Par_C2_GolEqui1' => 'required', 
            'Par_C2_GolEqui2' => 'required', 
            'Par_C3_GolEqui1' => 'required', 
            'Par_C3_GolEqui2' => 'required',             
            'Par_C4_GolEqui1' => 'required', 
            'Par_C4_GolEqui2' => 'required',             
            'Par_C5_GolEqui1' => 'required', 
            'Par_C5_GolEqui2' => 'required',             
            'Par_C6_GolEqui1' => 'required', 
            'Par_C6_GolEqui2' => 'required',                                         
        //// GRUPO D ///      
/*         
            'D1' => 'required',        
            'D2' => 'required',
            'D3' => 'required',
            'D4' => 'required',
            'D5' => 'required',
            'D6' => 'required',                  
*/
            'Par_D1_GolEqui1' => 'required',      
            'Par_D1_GolEqui2' => 'required', 
            'Par_D2_GolEqui1' => 'required', 
            'Par_D2_GolEqui2' => 'required', 
            'Par_D3_GolEqui1' => 'required', 
            'Par_D3_GolEqui2' => 'required',             
            'Par_D4_GolEqui1' => 'required', 
            'Par_D4_GolEqui2' => 'required',             
            'Par_D5_GolEqui1' => 'required', 
            'Par_D5_GolEqui2' => 'required',             
            'Par_D6_GolEqui1' => 'required', 
            'Par_D6_GolEqui2' => 'required',                  
        //// GRUPO E ///        
/*            
            'E1' => 'required',        
            'E2' => 'required',
            'E3' => 'required',
            'E4' => 'required',
            'E5' => 'required',
            'E6' => 'required',
*/
            'Par_E1_GolEqui1' => 'required',      
            'Par_E1_GolEqui2' => 'required', 
            'Par_E2_GolEqui1' => 'required', 
            'Par_E2_GolEqui2' => 'required', 
            'Par_E3_GolEqui1' => 'required', 
            'Par_E3_GolEqui2' => 'required',             
            'Par_E4_GolEqui1' => 'required', 
            'Par_E4_GolEqui2' => 'required',             
            'Par_E5_GolEqui1' => 'required', 
            'Par_E5_GolEqui2' => 'required',             
            'Par_E6_GolEqui1' => 'required', 
            'Par_E6_GolEqui2' => 'required',               
        //// GRUPO F ///      
/*         
            'F1' => 'required',        
            'F2' => 'required',
            'F3' => 'required',
            'F4' => 'required',
            'F5' => 'required',
            'F6' => 'required',       
*/         
            'Par_F1_GolEqui1' => 'required',      
            'Par_F1_GolEqui2' => 'required', 
            'Par_F2_GolEqui1' => 'required', 
            'Par_F2_GolEqui2' => 'required', 
            'Par_F3_GolEqui1' => 'required', 
            'Par_F3_GolEqui2' => 'required',             
            'Par_F4_GolEqui1' => 'required', 
            'Par_F4_GolEqui2' => 'required',             
            'Par_F5_GolEqui1' => 'required', 
            'Par_F5_GolEqui2' => 'required',             
            'Par_F6_GolEqui1' => 'required', 
            'Par_F6_GolEqui2' => 'required',         
        //// GRUPO G ///       
/*            
            'G1' => 'required',        
            'G2' => 'required',
            'G3' => 'required',
            'G4' => 'required',
            'G5' => 'required',
            'G6' => 'required',                        
*/
            'Par_G1_GolEqui1' => 'required',      
            'Par_G1_GolEqui2' => 'required', 
            'Par_G2_GolEqui1' => 'required', 
            'Par_G2_GolEqui2' => 'required', 
            'Par_G3_GolEqui1' => 'required', 
            'Par_G3_GolEqui2' => 'required',             
            'Par_G4_GolEqui1' => 'required', 
            'Par_G4_GolEqui2' => 'required',             
            'Par_G5_GolEqui1' => 'required', 
            'Par_G5_GolEqui2' => 'required',             
            'Par_G6_GolEqui1' => 'required', 
            'Par_G6_GolEqui2' => 'required',                 
        //// GRUPO H ///       
/*            
            'H1' => 'required',        
            'H2' => 'required',
            'H3' => 'required',
            'H4' => 'required',
            'H5' => 'required',
            'H6' => 'required',   
*/
            'Par_H1_GolEqui1' => 'required',      
            'Par_H1_GolEqui2' => 'required', 
            'Par_H2_GolEqui1' => 'required', 
            'Par_H2_GolEqui2' => 'required', 
            'Par_H3_GolEqui1' => 'required', 
            'Par_H3_GolEqui2' => 'required',             
            'Par_H4_GolEqui1' => 'required', 
            'Par_H4_GolEqui2' => 'required',             
            'Par_H5_GolEqui1' => 'required', 
            'Par_H5_GolEqui2' => 'required',             
            'Par_H6_GolEqui1' => 'required', 
            'Par_H6_GolEqui2' => 'required',          
//GRUPO I 
            'Par_I1_GolEqui1' => 'required',      
            'Par_I1_GolEqui2' => 'required', 
            'Par_I2_GolEqui1' => 'required', 
            'Par_I2_GolEqui2' => 'required', 
            'Par_I3_GolEqui1' => 'required', 
            'Par_I3_GolEqui2' => 'required',             
            'Par_I4_GolEqui1' => 'required', 
            'Par_I4_GolEqui2' => 'required',             
            'Par_I5_GolEqui1' => 'required', 
            'Par_I5_GolEqui2' => 'required',             
            'Par_I6_GolEqui1' => 'required', 
            'Par_I6_GolEqui2' => 'required',          
//GRUPO J
            'Par_J1_GolEqui1' => 'required',      
            'Par_J1_GolEqui2' => 'required', 
            'Par_J2_GolEqui1' => 'required', 
            'Par_J2_GolEqui2' => 'required', 
            'Par_J3_GolEqui1' => 'required', 
            'Par_J3_GolEqui2' => 'required',             
            'Par_J4_GolEqui1' => 'required', 
            'Par_J4_GolEqui2' => 'required',             
            'Par_J5_GolEqui1' => 'required', 
            'Par_J5_GolEqui2' => 'required',             
            'Par_J6_GolEqui1' => 'required', 
            'Par_J6_GolEqui2' => 'required', 
//GRUPO K 
            'Par_K1_GolEqui1' => 'required',      
            'Par_K1_GolEqui2' => 'required', 
            'Par_K2_GolEqui1' => 'required', 
            'Par_K2_GolEqui2' => 'required', 
            'Par_K3_GolEqui1' => 'required', 
            'Par_K3_GolEqui2' => 'required',             
            'Par_K4_GolEqui1' => 'required', 
            'Par_K4_GolEqui2' => 'required',             
            'Par_K5_GolEqui1' => 'required', 
            'Par_K5_GolEqui2' => 'required',             
            'Par_K6_GolEqui1' => 'required', 
            'Par_K6_GolEqui2' => 'required',           
// GRUPO L
            'Par_L1_GolEqui1' => 'required',      
            'Par_L1_GolEqui2' => 'required', 
            'Par_L2_GolEqui1' => 'required', 
            'Par_L2_GolEqui2' => 'required', 
            'Par_L3_GolEqui1' => 'required', 
            'Par_L3_GolEqui2' => 'required',             
            'Par_L4_GolEqui1' => 'required', 
            'Par_L4_GolEqui2' => 'required',             
            'Par_L5_GolEqui1' => 'required', 
            'Par_L5_GolEqui2' => 'required',             
            'Par_L6_GolEqui1' => 'required', 
            'Par_L6_GolEqui2' => 'required',                                              
        ];
    }
public function messages(): array
{
    $grupos = [
        'A' => \App\Models\GrupoA::orderBy('A_Partido')->get()->keyBy('A_Partido'),
        'B' => \App\Models\GrupoB::orderBy('B_Partido')->get()->keyBy('B_Partido'),
        'C' => \App\Models\GrupoC::orderBy('C_Partido')->get()->keyBy('C_Partido'),
        'D' => \App\Models\GrupoD::orderBy('D_Partido')->get()->keyBy('D_Partido'),
        'E' => \App\Models\GrupoE::orderBy('E_Partido')->get()->keyBy('E_Partido'),
        'F' => \App\Models\GrupoF::orderBy('F_Partido')->get()->keyBy('F_Partido'),
        'G' => \App\Models\GrupoG::orderBy('G_Partido')->get()->keyBy('G_Partido'),
        'H' => \App\Models\GrupoH::orderBy('H_Partido')->get()->keyBy('H_Partido'),
        'I' => \App\Models\GrupoI::orderBy('I_Partido')->get()->keyBy('I_Partido'),
        'J' => \App\Models\GrupoJ::orderBy('J_Partido')->get()->keyBy('J_Partido'),
        'K' => \App\Models\GrupoK::orderBy('K_Partido')->get()->keyBy('K_Partido'),
        'L' => \App\Models\GrupoL::orderBy('L_Partido')->get()->keyBy('L_Partido')
        // agregás C, D, E, F, G, H...
    ];

    $messages = [];

    foreach ($grupos as $letra => $partidos) {
        $i = 1;
        foreach ($partidos as $partido) {
            $equipo1 = $partido->{$letra.'_Equipo1'};
            $equipo2 = $partido->{$letra.'_Equipo2'};
            $messages["Par_{$letra}{$i}_GolEqui1.required"] = "Falta seleccionar goles de <strong>{$equipo1}</strong> : <strong>Grupo {$letra}</strong> : {$equipo1} Vs {$equipo2}";
            $messages["Par_{$letra}{$i}_GolEqui2.required"] = "Falta seleccionar goles de <strong>{$equipo2}</strong> : <strong>Grupo {$letra}</strong> : {$equipo1} Vs {$equipo2}";
            $i++;
        }
    }

    return $messages;
}      
}
