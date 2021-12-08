<?php

namespace App\Http\Livewire;

use App\Models\Option;
use App\Models\OptionValue;
use Livewire\Component;
use Livewire\WithPagination;

class Options extends Component
{
    use WithPagination;
    public $addOption = false;
    public $editOption = false;
    public $addValue = false;
    public $editValue = false;
    public $optionName, $optionname, $optionId,  $optionID, $optionid, $valueName, $valuename, $valueId;

    /**************************************ADD RECORDS**************************************/

    public function optionAdd()
    {

        $this->validate([
            'optionName' => 'required|string',
        ]);

        $check = Option::where('option_nm', $this->optionName)->count();

        if ($check == 1) {
            return redirect('option')->with('warning', 'Category already exist!');
        } else {
            Option::create([
                'option_nm' => $this->optionName,
            ]);
            return redirect('option')->with('status', 'New Option Added!');
        }
    }

    public function valueAdd()
    {

        $this->validate([
            'valueName' => 'required|string',
            'optionID' => 'required',
        ]);

        $check = OptionValue::where('value_name', $this->valueName)->count();

        if ($check == 1) {
            return redirect('option')->with('warning', 'Value already exist!');
        } else {
            OptionValue::create([
                'option_id' => $this->optionID,
                'value_name' => $this->valueName,
            ]);
            return redirect('option')->with('status', 'New Value Added!');
        }
    }

    /********************************************EDIT RECORDS ********************************************/

    public function viewOption($id)
    {
        $this->editOption = true;
        $singleOption = Option::find($id);
        $this->optionname = $singleOption->option_nm;
        $this->optionId = $id;
    }

    public function updateOption()
    {
        $option = Option::find($this->optionId);
        $option->update([
            'option_nm' => $this->optionname,
        ]);
        return redirect('option')->with('status', 'Option Updated!');
    }

    public function viewValue($id)
    {
        $this->editOption = true;
        $singleValue = OptionValue::find($id);
        $this->valuename = $singleValue->value_name;
        $this->optionid = $singleValue->option_id;
        $this->valueId = $id;
    }

    public function updateValue()
    {

        $this->validate([
            'valuename' => 'required|string',
            'optionid' => 'required',
        ]);
        $optionValue = Option::find($this->valueId);
        $optionValue->update([
            'option_id' => $this->optionid,
            'avlue_name' => $this->valuename,
        ]);
        return redirect('option')->with('status', 'Value Updated!');
    }


    /***********************************************************DELETE RECORDS ******************************** */

    public function deleteOption($id){
        Option::find($id)->delete();
        return redirect('option')->with('option', 'Category Removed!');
    }

    public function deleteValue($id)
    {
        OptionValue::find($id)->delete();
        return redirect('option')->with('option', 'Value Removed!');
    }


    public function render()
    {
        $options = Option::paginate(5);
        $values = OptionValue::paginate(5);
        return view('livewire.options', [
            'options' => $options,
            'values' => $values,
        ]);
    }
}
