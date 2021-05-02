import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-add-service',
  templateUrl: './add-service.component.html',
  styleUrls: ['./add-service.component.css'],
})
export class AddServiceComponent implements OnInit {
  services;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getServices();
  }

  getServices() {
    this.commonService.getServices().subscribe((res) => {
      this.services = res;
    });
  }
  files: File[] = [];

  onSelect(event) {
    this.files.push(...event.addedFiles);
  }

  onRemove(event) {
    this.files.splice(this.files.indexOf(event), 1);
  }

  submit() {
    window.scroll(0, 0);
  }
}
