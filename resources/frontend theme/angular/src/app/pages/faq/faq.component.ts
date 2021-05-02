import { Component, OnInit,OnDestroy } from '@angular/core';
import { Location } from '@angular/common';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-faq',
  templateUrl: './faq.component.html',
  styleUrls: ['./faq.component.css']
})
export class FaqComponent implements OnInit,OnDestroy {

  constructor(private location:Location,public commonSerivce:CommonServiceService) { }
  ngOnInit(): void {
     this.commonSerivce.nextmessage('chat');
  }
  ngOnDestroy() {
    this.commonSerivce.nextmessage('');
  }  
  back() {
  	 this.location.back()
  }

}
