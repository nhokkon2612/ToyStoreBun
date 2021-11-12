<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewAndUpdateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cost' => 'required|numeric|min:4|',
            'price' => 'required|numeric|min:4|',
            'weight' => 'required|numeric|',
            'quantity' => 'required|numeric|between:1,1000000',
            'status' => 'required',
            'size' => 'required',
            'image' => 'image|max:5200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Hãy điền đủ',
            'cost.required' => 'Hãy điền đủ',
            'price.required' => 'Hãy điền đủ',
            'weight.required' => 'Hãy điền đủ',
            'quantity.required' => 'Hãy điền đủ',
            'status.required' => 'Hãy điền đủ',
            'size.required' => 'Hãy điền đủ',
            'cost.numeric' => 'Vui lòng chỉ nhập số',
            'price.numeric' => 'Vui lòng chỉ nhập số',
            'weight.numeric' => 'Vui lòng chỉ nhập số',
            'quantity.numeric' => 'Vui lòng chỉ nhập số',
            'cost.min' => 'Tối thiểu 1000 VNĐ',
            'price.min' => 'Tối thiểu 1000 VNĐ',
            'quantity.between' => 'Số lượng nhập lớp hơn 1',
            'image.image'=>'Hãy Upload đúng file ảnh',
            'image.max'=>'Ảnh của bạn vượt quá 5MB',
        ];
    }
}
