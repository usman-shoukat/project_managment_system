import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-edit-service',
  templateUrl: './edit-service.component.html',
  styleUrls: ['./edit-service.component.css'],
})
export class EditServiceComponent implements OnInit {
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
}
